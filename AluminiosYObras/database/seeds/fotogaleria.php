<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class fotogaleria extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('fotogaleria')-> insert(array('fotos'=>'/ImagenesLaterales/proyecto_1_lateral_1.jpg','descripcion'=>'Vista lateral','fkidgaleria'=>'1'));
        DB::table('fotogaleria')-> insert(array('fotos'=>'/ImagenesLaterales/proyecto_1_lateral_2.jpg','descripcion'=>'Vista lateral','fkidgaleria'=>'1'));
        DB::table('fotogaleria')-> insert(array('fotos'=>'/ImagenesLaterales/proyecto_1_lateral_3.jpg','descripcion'=>'Vista lateral','fkidgaleria'=>'1'));

        DB::table('fotogaleria')-> insert(array('fotos'=>'/ImagenesLaterales/proyecto_2_lateral_1.jpg','descripcion'=>'Vista lateral','fkidgaleria'=>'2'));
        DB::table('fotogaleria')-> insert(array('fotos'=>'/ImagenesLaterales/proyecto_2_lateral_2.jpg','descripcion'=>'Vista lateral','fkidgaleria'=>'2'));
        DB::table('fotogaleria')-> insert(array('fotos'=>'/ImagenesLaterales/proyecto_2_lateral_3.jpg','descripcion'=>'Vista lateral','fkidgaleria'=>'2'));

        DB::table('fotogaleria')-> insert(array('fotos'=>'/ImagenesLaterales/proyecto_3_lateral_1.jpg','descripcion'=>'Vista lateral','fkidgaleria'=>'3'));
        DB::table('fotogaleria')-> insert(array('fotos'=>'/ImagenesLaterales/proyecto_3_lateral_2.jpg','descripcion'=>'Vista lateral','fkidgaleria'=>'3'));
        DB::table('fotogaleria')-> insert(array('fotos'=>'/ImagenesLaterales/proyecto_3_lateral_3.jpg','descripcion'=>'Vista lateral','fkidgaleria'=>'3'));

        DB::table('fotogaleria')-> insert(array('fotos'=>'/ImagenesLaterales/proyecto_4_lateral_1.jpg','descripcion'=>'Vista lateral','fkidgaleria'=>'4'));
        DB::table('fotogaleria')-> insert(array('fotos'=>'/ImagenesLaterales/proyecto_4_lateral_2.jpg','descripcion'=>'Vista lateral','fkidgaleria'=>'4'));
        DB::table('fotogaleria')-> insert(array('fotos'=>'/ImagenesLaterales/proyecto_4_lateral_3.jpg','descripcion'=>'Vista lateral','fkidgaleria'=>'4'));

        DB::table('fotogaleria')-> insert(array('fotos'=>'/ImagenesLaterales/proyecto_5_lateral_1.jpg','descripcion'=>'Vista lateral','fkidgaleria'=>'5'));
        DB::table('fotogaleria')-> insert(array('fotos'=>'/ImagenesLaterales/proyecto_5_lateral_2.jpg','descripcion'=>'Vista lateral','fkidgaleria'=>'5'));
        DB::table('fotogaleria')-> insert(array('fotos'=>'/ImagenesLaterales/proyecto_5_lateral_3.jpg','descripcion'=>'Vista lateral','fkidgaleria'=>'5'));

        DB::table('fotogaleria')-> insert(array('fotos'=>'/ImagenesLaterales/proyecto_6_lateral_1.jpg','descripcion'=>'Vista lateral','fkidgaleria'=>'6'));
        DB::table('fotogaleria')-> insert(array('fotos'=>'/ImagenesLaterales/proyecto_6_lateral_2.jpg','descripcion'=>'Vista lateral','fkidgaleria'=>'6'));
        DB::table('fotogaleria')-> insert(array('fotos'=>'/ImagenesLaterales/proyecto_6_lateral_3.jpg','descripcion'=>'Vista lateral','fkidgaleria'=>'6'));

        DB::table('fotogaleria')-> insert(array('fotos'=>'/ImagenesLaterales/proyecto_7_lateral_1.jpg','descripcion'=>'Vista lateral','fkidgaleria'=>'7'));
        DB::table('fotogaleria')-> insert(array('fotos'=>'/ImagenesLaterales/proyecto_7_lateral_2.jpg','descripcion'=>'Vista lateral','fkidgaleria'=>'7'));
        DB::table('fotogaleria')-> insert(array('fotos'=>'/ImagenesLaterales/proyecto_7_lateral_3.jpg','descripcion'=>'Vista lateral','fkidgaleria'=>'7'));

        DB::table('fotogaleria')-> insert(array('fotos'=>'/ImagenesLaterales/proyecto_8_lateral_1.jpg','descripcion'=>'Vista lateral','fkidgaleria'=>'8'));
        DB::table('fotogaleria')-> insert(array('fotos'=>'/ImagenesLaterales/proyecto_8_lateral_2.jpg','descripcion'=>'Vista lateral','fkidgaleria'=>'8'));
        DB::table('fotogaleria')-> insert(array('fotos'=>'/ImagenesLaterales/proyecto_8_lateral_3.jpg','descripcion'=>'Vista lateral','fkidgaleria'=>'8'));

        DB::table('fotogaleria')-> insert(array('fotos'=>'/ImagenesLaterales/proyecto_9_lateral_1.jpg','descripcion'=>'Vista lateral','fkidgaleria'=>'9'));
        DB::table('fotogaleria')-> insert(array('fotos'=>'/ImagenesLaterales/proyecto_9_lateral_2.jpg','descripcion'=>'Vista lateral','fkidgaleria'=>'9'));
        DB::table('fotogaleria')-> insert(array('fotos'=>'/ImagenesLaterales/proyecto_9_lateral_3.jpg','descripcion'=>'Vista lateral','fkidgaleria'=>'9'));

        DB::table('fotogaleria')-> insert(array('fotos'=>'/ImagenesLaterales/proyecto_10_lateral_1.jpg','descripcion'=>'Vista lateral','fkidgaleria'=>'10'));
        DB::table('fotogaleria')-> insert(array('fotos'=>'/ImagenesLaterales/proyecto_10_lateral_2.jpg','descripcion'=>'Vista lateral','fkidgaleria'=>'10'));
        DB::table('fotogaleria')-> insert(array('fotos'=>'/ImagenesLaterales/proyecto_10_lateral_3.jpg','descripcion'=>'Vista lateral','fkidgaleria'=>'10'));

        DB::table('fotogaleria')-> insert(array('fotos'=>'/ImagenesLaterales/proyecto_11_lateral_1.jpg','descripcion'=>'Vista lateral','fkidgaleria'=>'11'));
        DB::table('fotogaleria')-> insert(array('fotos'=>'/ImagenesLaterales/proyecto_11_lateral_2.jpg','descripcion'=>'Vista lateral','fkidgaleria'=>'11'));
        DB::table('fotogaleria')-> insert(array('fotos'=>'/ImagenesLaterales/proyecto_11_lateral_3.jpg','descripcion'=>'Vista lateral','fkidgaleria'=>'11'));

        DB::table('fotogaleria')-> insert(array('fotos'=>'/ImagenesLaterales/proyecto_12_lateral_1.jpg','descripcion'=>'Vista lateral','fkidgaleria'=>'12'));
        DB::table('fotogaleria')-> insert(array('fotos'=>'/ImagenesLaterales/proyecto_12_lateral_2.jpg','descripcion'=>'Vista lateral','fkidgaleria'=>'12'));
        DB::table('fotogaleria')-> insert(array('fotos'=>'/ImagenesLaterales/proyecto_12_lateral_3.jpg','descripcion'=>'Vista lateral','fkidgaleria'=>'12'));
    }
}
