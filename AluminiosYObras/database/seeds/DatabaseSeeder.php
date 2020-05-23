<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this-> call (login::class);
        $this-> call (bienvenida::class);
        $this-> call (modulo::class);
        $this-> call (caracteristicasmodulo::class);
        $this-> call (galeria::class);
        $this-> call (fotogaleria::class);
        $this-> call (carrusel::class);
    }
}
