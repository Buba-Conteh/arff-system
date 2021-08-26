<?php

namespace App\Http\Livewire\Fire;

use App\Models\Fire;
use Livewire\Component;

class View extends Component
{
    public $fire;
    public function mount(Fire $fire)
    {
        $this->fire = $fire;
    }
    public function render()
    {
        return view('livewire.fire.view');
    }
}
