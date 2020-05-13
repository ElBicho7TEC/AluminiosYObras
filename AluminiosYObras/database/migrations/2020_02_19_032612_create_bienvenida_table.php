<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBienvenidaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bienvenida', function (Blueprint $table) {
            $table-> increments('idbienvenidos');
            $table-> string('mensajewelcome',40);
            $table-> string('subtitulo',60);
            $table-> string('descripcion',200);
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bienvenida');
    }
}
