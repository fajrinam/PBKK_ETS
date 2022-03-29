<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeederTablePasien extends Seeder
{
    public function run()
    {
        DB::table('pasien')->delete();
    
        $pasien = array(
        array('nama'=>'Dery','jenkel'=>'Pria','alamat'=>'Jl. Rajawali Cilacap','telp'=>'089123456789','created_at'=>DB::raw('NOW()')),
        array('nama'=>'Septian','jenkel'=>'Pria','alamat'=>'Jl. Kutilang Cilacap','telp'=>'089987654321','created_at'=>DB::raw('NOW()')),
        array('nama'=>'Suwandi','jenkel'=>'Pria','alamat'=>'Jl. Perkutut Cilacap','telp'=>'089543456543','created_at'=>DB::raw('NOW()')),
        array('nama'=>'Fajrinam','jenkel'=>'Pria','alamat'=>'Jl. Keputih','telp'=>'081243245674','created_at'=>DB::raw('NOW()'))
        );

        DB::table('pasien')->insert($pasien);
    }
}