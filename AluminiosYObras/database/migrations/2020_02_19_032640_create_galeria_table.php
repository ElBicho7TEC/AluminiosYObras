<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGaleriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galeria', function (Blueprint $table) {
            $table-> increments('idgaleria');
            $table-> string('nombreproyecto',40);
            $table-> string('rutafotoprincipal',100);
            $table-> string('descripcionbreve',70);
            $table-> string('descripcionlarga',200);
            $table-> integer ('fkidmodulo')->unsigned();
            $table-> foreign('fkidmodulo')->references('idmodulo')->on('modulo');
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
        Schema::dropIfExists('galeria');
    }
}
