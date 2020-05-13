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
            $table-> string('subtitulo1',30);
            $table-> string('subtitulo2',30);
            $table-> string('descripcion',200);
            $table->engine = "InnoDB";
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
