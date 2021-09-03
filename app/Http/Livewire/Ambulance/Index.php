<?php

namespace App\Http\Livewire\Ambulance;

use App\Models\Ambulance;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $ambulances=Ambulance::all();
        return view('livewire.ambulance.index', compact('ambulances'));
    }
}
