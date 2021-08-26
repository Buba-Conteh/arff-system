<?php

namespace App\Http\Livewire\Fire;

use App\Models\Fire;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $fires = Fire::with('fire_medium','crew')->get();
        // dd($fires);
        return view('livewire.fire.index', compact('fires'));
    }

    public function edit(Fire $fire)
    {
       return redirect('fire/create')->with('fire',$fire);
    }
}
