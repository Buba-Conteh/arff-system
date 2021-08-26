<?php

namespace App\Http\Livewire\FireMediums;

use App\Models\FireMediums;
use Livewire\Component;

class Create extends Component
{
    public $name;
    public $description;
  

    protected $rules = [
        'name'=>'required|unique:fire_mediums,name',
        'description'=>'nullable'
        
    ];

    public function render()
    {
        return view('livewire.fire-mediums.create');
    }

    public function store()
    {
        

        
        FireMediums::create($this->validate());
        $this->resetForm();
        session()->flash('sucess', 'Fire Incident Save Sucessfull');

        
    }

    public function resetForm()
    {
        # code...
    }
}
