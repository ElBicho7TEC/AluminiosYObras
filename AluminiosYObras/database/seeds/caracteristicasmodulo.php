<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class caracteristicasmodulo extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('caracteristicasmodulo')-> insert(array('caracteristica'=>'Caracteristica 1','fkidmodulo'=>'1'));
        DB::table('caracteristicasmodulo')-> insert(array('caracteristica'=>'Caracteristica 2','fkidmodulo'=>'1'));
        DB::table('caracteristicasmodulo')-> insert(array('caracteristica'=>'Caracteristica 3','fkidmodulo'=>'1'));

        DB::table('caracteristicasmodulo')-> insert(array('caracteristica'=>'Caracteristica 1','fkidmodulo'=>'2'));
        DB::table('caracteristicasmodulo')-> insert(array('caracteristica'=>'Caracteristica 2','fkidmodulo'=>'2'));
        DB::table('caracteristicasmodulo')-> insert(array('caracteristica'=>'Caracteristica 3','fkidmodulo'=>'2'));

        DB::table('caracteristicasmodulo')-> insert(array('caracteristica'=>'Caracteristica 1','fkidmodulo'=>'3'));
        DB::table('caracteristicasmodulo')-> insert(array('caracteristica'=>'Caracteristica 2','fkidmodulo'=>'3'));
        DB::table('caracteristicasmodulo')-> insert(array('caracteristica'=>'Caracteristica 3','fkidmodulo'=>'3'));

        DB::table('caracteristicasmodulo')-> insert(array('caracteristica'=>'Caracteristica 1','fkidmodulo'=>'4'));
        DB::table('caracteristicasmodulo')-> insert(array('caracteristica'=>'Caracteristica 2','fkidmodulo'=>'4'));
        DB::table('caracteristicasmodulo')-> insert(array('caracteristica'=>'Caracteristica 3','fkidmodulo'=>'4'));

    }
}
