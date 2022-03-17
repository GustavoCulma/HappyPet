<?php

namespace Database\Seeders;

use App\Models\Specie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpecieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $species =[
            ['name'=>'Perro'],
            ['name'=>'Gato'],
            ['name'=>'Tortuga'],
            ['name'=>'Hamster'],
            ['name'=>'Caballo'],
        ];
        foreach ($species as $specie) {
            $specie= Specie::create($specie);
        }
    }
}
