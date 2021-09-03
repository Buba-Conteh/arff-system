<?php

namespace App\Http\Livewire\Crews;

use App\Models\Crew;
use Livewire\Component;

class Index extends Component
{
    public $fire_date;
    public $name;
    public $commander;
    public $description;
  
    protected $rules = [
        'name'=>'required|unique:crews,name',
        'commander'=>'nullable',
        'description'=>'nullable'
        
    ];

    public function render()
    {
        $crews= Crew::all();
        return view('livewire.crews.index', compact('crews'));
    }
    public function edit($crew)
    {
        $this->emitTo('livewire.crews.create','editCrew', $crew);
       return redirect('/fire-meduims/create');
    }

    public function store()
    {
      
        Crew::create($this->validate());
        $this->resetForm();
        session()->flash('sucess', 'Fire Incident Save Sucessfull');
    }

    public function resetForm()
    {
     $this->fire_date='';
     $this->name='';
     $this->commander='';
     $this->description='';

    }
}
