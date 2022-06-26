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
		/*
		$this->call(UsuariosTableSeeder::class); // 2
		*/
        $this->call(EstadosTableSeeder::class); // 5
		$this->call(MunicipiosTableSeeder::class); // 6
    }
}
