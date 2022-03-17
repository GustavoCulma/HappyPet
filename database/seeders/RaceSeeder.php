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
        $races =[
                    ['name' => 'Pastor ','specie_id' => 1],
                    ['name' => 'Bulldog ','specie_id' => 1],
                    ['name' => 'Chihuahua','specie_id' => 1],
                    ['name' => 'Boxer','specie_id' => 1],
                    ['name' => 'labrador','specie_id' => 1],
                    ['name' => 'Boyero','specie_id' => 1],
                    ['name' => 'San Bernardo','specie_id' => 1],
                    ['name' => 'Terrier','specie_id' => 1],
                    ['name' => 'Sabueso','specie_id' => 1],
                    ['name' => 'Persa','specie_id' => 2],
                    ['name' => 'Azul ruso','specie_id' => 2],
                    ['name' => 'Siamés','specie_id' => 2],
                    ['name' => 'Angora turco','specie_id' => 2],
                    ['name' => 'Siberiano','specie_id' => 2],
                    ['name' => 'Bengalí','specie_id' => 2],
                    ['name' => 'Bengalí','specie_id' => 2],
                    ['name' => 'Tortuga de orejas rojas','specie_id' => 3],
                    ['name' => 'Tortuga de Ramsay.','specie_id' => 3],
                    ['name' => 'Tortuga de Cumberland','specie_id' => 3],
                    ['name' => 'Tortuga moteada','specie_id' => 3],
                    ['name' => 'Tortuga de orejas amarillas','specie_id' => 3],
                    ['name' => 'El hámster enano de china','specie_id' => 4],
                    ['name' => 'El hámster enano ruso','specie_id' => 4],
                    ['name' => 'El hámster enano de Campbel','specie_id' => 4],
                    ['name' => 'Trocha Pura','specie_id' => 5],
                    ['name' => 'Caballos árabes','specie_id' => 5],
                    ['name' => 'Caballos pintos','specie_id' => 5],
                    ['name' => 'Caballo pura sangre inglés','specie_id' => 5],
                    ['name' => 'Caballos Mustang','specie_id' => 5],
        ];
        
        foreach ($races as $race) {
            $race= Race::create($race);
        }
    }
}
