<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaracteristicasModuloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caracteristicasmodulo', function (Blueprint $table) {
            $table-> increments('idcaracteristicasmodulo');
            $table-> string('caracteristica',70);
            $table-> integer ('fkidmodulo')->unsigned();
            $table-> foreign('fkidmodulo')->references('idmodulo')->on('modulo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modulo');
    }
}
