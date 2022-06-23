<?php

use App\Estados;
use Illuminate\Database\Seeder;

class EstadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Estados::truncate();

        DB::insert("INSERT INTO `Estados` (`id`, `Nombre`, `created_at`, `updated_at`) VALUES
				(1, 'Aguascalientes', NULL, NULL),
				(2, 'Baja California', NULL, NULL),
				(3, 'Baja California Sur', NULL, NULL),
				(4, 'Campeche', NULL, NULL),
				(5, 'Coahuila', NULL, NULL),
				(6, 'Colima', NULL, NULL),
				(7, 'Chiapas', NULL, NULL),
				(8, 'Chihuahua', NULL, NULL),
				(9, 'Ciudad de México', NULL, NULL),
				(10, 'Durango', NULL, NULL),
				(11, 'Guanajuato', NULL, NULL),
				(12, 'Guerrero', NULL, NULL),
				(13, 'Hidalgo', NULL, NULL),
				(14, 'Jalisco', NULL, NULL),
				(15, 'México', NULL, NULL),
				(16, 'Michoacán', NULL, NULL),
				(17, 'Morelos', NULL, NULL),
				(18, 'Nayarit', NULL, NULL),
				(19, 'Nuevo León', NULL, NULL),
				(20, 'Oaxaca', NULL, NULL),
				(21, 'Puebla', NULL, NULL),
				(22, 'Querétaro', NULL, NULL),
				(23, 'Quintana Roo', NULL, NULL),
				(24, 'San Luis Potosí', NULL, NULL),
				(25, 'Sinaloa', NULL, NULL),
				(26, 'Sonora', NULL, NULL),
				(27, 'Tabasco', NULL, NULL),
				(28, 'Tamaulipas', NULL, NULL),
				(29, 'Tlaxcala', NULL, NULL),
				(30, 'Veracruz', NULL, NULL),
				(31, 'Yucatán', NULL, NULL),
				(32, 'Zacatecas', NULL, NULL),
				(33, 'Sin Información', NULL, NULL),
				(34, 'Nacido en el Extrangero', NULL, NULL);
				");
    }
}
