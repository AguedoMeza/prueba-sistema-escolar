<?php

use App\User;
use Illuminate\Database\Seeder;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //User::truncate();

        User::create([
        	'id' => 1, 
        	'name' => 'Eugenio',
        	'paterno' => 'Garza',
        	'materno' => 'Sada' ,
        	'email' => 'admin@inmuebles.com',
        	'password' => bcrypt('123qwe'),
        	'remember_token' => null
        ]);
    }
}
