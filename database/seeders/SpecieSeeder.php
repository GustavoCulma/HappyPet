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
        Specie::create(['name'=>'Perro']);
        Specie::create(['name'=>'Gato']);
        Specie::create(['name'=>'Tortuga']);
        Specie::create(['name'=>'Hamster']);
        Specie::create(['name'=>'Caballo']);
    }
}
