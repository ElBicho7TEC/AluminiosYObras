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
        DB::table('carrusel')-> insert(array('rutacarrusel'=>'/modulos/modulo_puertas.jpg'));

        DB::table('carrusel')-> insert(array('rutacarrusel'=>'/modulos/modulo_escaleras.jpg'));

        DB::table('carrusel')-> insert(array('rutacarrusel'=>'/modulos/modulo_ventanas.jpg'));

    }
}
