<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class login extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('login')-> insert(array('correoElectronico'=>'admin@aluminiosyobras.com.mx','contrasena'=>md5('Admi12//1')));
    }
}
