<?php

namespace App\Http\Livewire;

use App\Models\Specie;
use App\Models\Race;
use Livewire\Component;

class Pets extends Component
{
    public $selectedSpecie =null;
    public $selectedRace = null;

    public $races =null;
    public function render()
    {
        return view('livewire.pets', [
            'species'=> Specie::all()
        ]);
    }

    public function updatedselectedSpecie($specie_id)
    {
        $this->races= Race::where('specie_id', $specie_id)->get();
    }
}
