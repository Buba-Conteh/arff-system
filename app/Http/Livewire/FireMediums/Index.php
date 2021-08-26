<?php

namespace App\Http\Livewire\FireMediums;

use App\Models\FireMediums;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $mediums = FireMediums::all();
        return view('livewire.fire-mediums.index', compact('mediums'));
    }
}
