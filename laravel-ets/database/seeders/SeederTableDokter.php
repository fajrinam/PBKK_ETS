<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeederTableDokter extends Seeder
{
    public function run()
    {
        DB::table('dokter')->delete();
    
        $dokter = array(
        array('nama'=>'Fajrin Amiruddin','jenkel'=>'Pria','alamat'=>'Jl. Keputih Tegal Timur','telp'=>'081243245674','created_at'=>DB::raw('NOW()')),
        array('nama'=>'Hanifa','jenkel'=>'Perempuan','alamat'=>'Jl. Perkutut Cilacap','telp'=>'089543456543','created_at'=>DB::raw('NOW()')),
        array('nama'=>'Fitrah','jenkel'=>'Pria','alamat'=>'Jl. Rajawali Cilacap','telp'=>'089123456789','created_at'=>DB::raw('NOW()')),
        array('nama'=>'Septian','jenkel'=>'Pria','alamat'=>'Jl. Kutilang Cilacap','telp'=>'089987654321','created_at'=>DB::raw('NOW()'))
        );

        DB::table('dokter')->insert($dokter);
    }
}