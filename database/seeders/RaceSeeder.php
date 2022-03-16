<?php

namespace Database\Seeders;

use App\Models\Race;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Race::create(['name' => 'Pastor ','specie_id' => 1]);
        Race::create(['name' => 'Bulldog ','specie_id' => 1]);
        Race::create(['name' => 'Chihuahua','specie_id' => 1]);
        Race::create(['name' => 'Boxer','specie_id' => 1]);
        Race::create(['name' => 'labrador','specie_id' => 1]);
        Race::create(['name' => 'Boyero','specie_id' => 1]);
        Race::create(['name' => 'San Bernardo','specie_id' => 1]);
        Race::create(['name' => 'Terrier','specie_id' => 1]);
        Race::create(['name' => 'Sabueso','specie_id' => 1]);
        Race::create(['name' => 'Persa','specie_id' => 2]);
        Race::create(['name' => 'Azul ruso','specie_id' => 2]);
        Race::create(['name' => 'Siamés','specie_id' => 2]);
        Race::create(['name' => 'Angora turco','specie_id' => 2]);
        Race::create(['name' => 'Siberiano','specie_id' => 2]);
        Race::create(['name' => 'Bengalí','specie_id' => 2]);
        Race::create(['name' => 'Bengalí','specie_id' => 2]);
        Race::create(['name' => 'Tortuga de orejas rojas','specie_id' => 3]);
        Race::create(['name' => 'Tortuga de Ramsay.','specie_id' => 3]);
        Race::create(['name' => 'Tortuga de Cumberland','specie_id' => 3]);
        Race::create(['name' => 'Tortuga moteada','specie_id' => 3]);
        Race::create(['name' => 'Tortuga de orejas amarillas','specie_id' => 3]);
        Race::create(['name' => 'El hámster enano de china','specie_id' => 4]);
        Race::create(['name' => 'El hámster enano ruso','specie_id' => 4]);
        Race::create(['name' => 'El hámster enano de Campbel','specie_id' => 4]);
        Race::create(['name' => 'Trocha Pura','specie_id' => 5]);
        Race::create(['name' => 'Caballos árabes','specie_id' => 5]);
        Race::create(['name' => 'Caballos pintos','specie_id' => 5]);
        Race::create(['name' => 'Caballo pura sangre inglés','specie_id' => 5]);
        Race::create(['name' => 'Caballos Mustang','specie_id' => 5]);
    }
}
