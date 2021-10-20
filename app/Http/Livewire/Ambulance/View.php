<?php

namespace App\Http\Livewire\Ambulance;

use App\Models\Ambulance;
use Livewire\Component;

class View extends Component
{
    public $ambulance;
    public function mount(Ambulance $ambulance)
    {
        $this->ambulancere = $ambulance;
    }

    public function render()
    {
        
        return view('livewire.ambulance.view');
    }
}
