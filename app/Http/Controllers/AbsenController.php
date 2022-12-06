<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use DB;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Spatie\SlackAlerts\Facades\SlackAlert;

class AbsenController extends Controller
{
    public function store(Request $request)
    {
        $tes = Mahasiswa::where('nim', $request->id_mahasiswa)->exists();

        if (!$tes) {
            return redirect('/')->with('invalid', 'QR Code tidak terdaftar', SlackAlert::message("⛔*INVALID QR CODE*"));
        }

        $nama_mahasiswa = DB::table('mahasiswas')->where('nim', $request->id_mahasiswa)->first()->nama;

        $cek = Absen::where([
            'id_mahasiswa' => $request->id_mahasiswa,
            'tanggal' => date('Y-m-d')
        ])->first();

        if ($cek) {
            return redirect('/')->with('gagal', 'Anda sudah absen', SlackAlert::message("💥MAHASISWA DENGAN NAMA: *$nama_mahasiswa* ANDA SUDAH ABSEN"));
        }

        Absen::create([
            'id_mahasiswa' => $request->id_mahasiswa,
            'tanggal' => date('Y-m-d')
        ]);

        return redirect('/')->with('berhasil', 'Absen anda terekam', SlackAlert::message("✅MAHASISWA DENGAN NAMA: *$nama_mahasiswa* ABSEN ANDA TEREKAM"));

        $tes =  Absen::where([
            'id_mahasiswa' => $request->id_mahasiswa,
        ])-> first();

        if (!$tes) {
            return redirect('/')->with('invalid', 'Invalid QR Code', SlackAlert::message("INVALID QR CODE"));
        }
    }
}
