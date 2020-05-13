<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class bienvenida extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('bienvenida')-> insert(array('mensajewelcome'=>'bienvenido a Aluminios y Obras', 'subtitulo1'=>'Productos', 'subtitulo2'=>'de primera calidad','descripcion'=>'Somos la empresa número uno de mayor calidad, en todo méxico, danos la oportunidad'));
    }
}
