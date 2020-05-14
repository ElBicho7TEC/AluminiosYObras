<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class modulo extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('modulo')-> insert(array('nombremodulo'=>'PUERTAS','rutamodulo'=>'/modulos/modulo_puertas.jpg','numeroresaltador'=>'100','descripciondelnumero'=>'CLIENTES SATISFECHOS'));

        DB::table('modulo')-> insert(array('nombremodulo'=>'VENTANAS','rutamodulo'=>'/modulos/modulo_ventanas.jpg','numeroresaltador'=>'100','descripciondelnumero'=>'CLIENTES SATISFECHOS'));

        DB::table('modulo')-> insert(array('nombremodulo'=>'PORTONES','rutamodulo'=>'/modulos/modulo_portones.jpg','numeroresaltador'=>'100','descripciondelnumero'=>'CLIENTES SATISFECHOS'));

        DB::table('modulo')-> insert(array('nombremodulo'=>'ESCALERAS','rutamodulo'=>'/modulos/modulo_escaleras.jpg','numeroresaltador'=>'100','descripciondelnumero'=>'CLIENTES SATISFECHOS'));
    }
}
