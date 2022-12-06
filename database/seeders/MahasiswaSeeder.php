<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mahasiswa = [
            [
                'nim' => '165150707111018',
                'nama' => 'AGILEO WIDIONO'
            ],
            [
                'nim' => '175150701111012',
                'nama' => 'RIZKY AMELIA SALSABILA'
            ],
            [
                'nim' => '205150700111003',
                'nama' => 'MUHAMMAD DAVIN FADILLAH'
            ],
            [
                'nim' => '205150700111011',
                'nama' => 'ASYA ISMATULLAH FARIS'
            ],
            [
                'nim' => '205150700111017',
                'nama' => 'MUHAMMAD HANIF ARDHIANSYAH'
            ],
            [
                'nim' => '205150700111020',
                'nama' => 'RAKA BELVA RAIHANSHA'
            ],
            [
                'nim' => '205150700111023',
                'nama' => 'MUNZIR TAMAM'
            ],
            [
                'nim' => '205150700111026',
                'nama' => 'HOKMAN SOLIDEO HAKATI'
            ],
            [
                'nim' => '205150700111029',
                'nama' => 'RAIHAN ALFARISI'
            ],
            [
                'nim' => '205150700111033',
                'nama' => 'NAOMI DAVITA BUDIMAN'
            ],
            [
                'nim' => '205150700111034',
                'nama' => 'MUHAMMAD ABIYYI RAHINDA'
            ],
            [
                'nim' => '205150700111035',
                'nama' => 'RAIHAN ZAHRAN FIRDAUS'
            ],
            [
                'nim' => '205150700111039',
                'nama' => 'RIZQI WIJANARKO'
            ],
            [
                'nim' => '205150700111042',
                'nama' => 'ABI ALQHAFARI'
            ],
            [
                'nim' => '205150700111044',
                'nama' => 'MUHAMMAD KANZUL FIKRI'
            ],
            [
                'nim' => '205150700111046',
                'nama' => 'SEPTIAH CAHYO BUDI LAKSONO'
            ],
            [
                'nim' => '205150700111053',
                'nama' => 'M. ALFI SYAHRI RAMADHAN'
            ],
            [
                'nim' => '205150700111054',
                'nama' => 'GILBERT ARYADUTA PINEM'
            ],
            [
                'nim' => '205150701111006',
                'nama' => 'A`INUN SUKMAWATI'
            ],
            [
                'nim' => '205150701111009',
                'nama' => 'SYAFIRA ALIFAH'
            ],
            [
                'nim' => '205150701111014',
                'nama' => 'THARESSA FITRIA'
            ],
            [
                'nim' => '205150701111017',
                'nama' => 'MUHAMMAD IHSAN FAUZI'
            ],
            [
                'nim' => '205150701111018',
                'nama' => 'MUHAMMAD HELMY FADLAIL ALBAB'
            ],
            [
                'nim' => '205150701111023',
                'nama' => 'RAIHAN WINURPUTRA'
            ],
            [
                'nim' => '205150701111024',
                'nama' => 'RIF`ATUL ILMI'
            ],
            [
                'nim' => '205150701111025',
                'nama' => 'SOFITA HIDAYATUL MAGHFIROH'
            ],
            [
                'nim' => '205150701111026',
                'nama' => 'SRI INDRAYANI'
            ],
            [
                'nim' => '205150701111030',
                'nama' => 'AVERIL PRIMAYUDA'
            ],
            [
                'nim' => '205150701111034',
                'nama' => 'FURQAN MAULANA PRANATA'
            ],
            [
                'nim' => '205150707111009',
                'nama' => 'MUHAMMAD IQBAL'
            ],
            [
                'nim' => '205150707111015',
                'nama' => 'FERRY SETIAWAN'
            ],
            [
                'nim' => '205150707111017',
                'nama' => 'MUHAMMAD DEVAN RYANDRA'
            ],
            [
                'nim' => '205150707111018',
                'nama' => 'LAKSONO PRASETYO'
            ],
            [
                'nim' => '205150707111024',
                'nama' => 'MUHAMMAD ILHAM GIBRAN'
            ],
            [
                'nim' => '205150707111025',
                'nama' => 'FIKRI AHMAD HAEKAL'
            ],
            [
                'nim' => '205150707111031',
                'nama' => 'ADITYA ANDREW PRAKOSO'
            ],
            [
                'nim' => '205150707111033',
                'nama' => 'MATHORA FAJRIL RAHMATULLAH'
            ],
            [
                'nim' => '205150707111036',
                'nama' => 'MUHAMMAD NADHIF NABHAN'
            ],
            [
                'nim' => '215150709111006',
                'nama' => 'DAFFA RAKA MAHENDRA'
            ],
            [
                'nim' => '215150709111008',
                'nama' => 'APRILICIA AURA SALSABILAH'
            ],
        ];

        Mahasiswa::insert($mahasiswa);
    }
}
