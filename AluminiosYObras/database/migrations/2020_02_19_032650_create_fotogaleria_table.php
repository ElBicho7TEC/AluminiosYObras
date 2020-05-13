<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFotoGaleriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fotogaleria', function (Blueprint $table) {
            $table-> increments('idfotogaleria');
            $table-> string('fotos',100);
            $table-> string('descripción',100);
            $table-> integer ('fkgaleria')->unsigned();
            $table-> foreign('fkgaleria')->references('idgaleria')->on('galeria');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('galeria');
    }
}
