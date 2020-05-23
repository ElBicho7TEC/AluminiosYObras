<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class carrusel extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('carrusel')-> insert(array('rutacarrusel'=>'/banner/banner1.jpg'));

        DB::table('carrusel')-> insert(array('rutacarrusel'=>'/banner/banner2.jpg'));

        DB::table('carrusel')-> insert(array('rutacarrusel'=>'/banner/banner3.jpg'));

    }
}
