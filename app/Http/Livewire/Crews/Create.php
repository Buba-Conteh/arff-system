<?php

namespace App\Http\Livewire\Crews;

use App\Models\Crew ;
use Livewire\Component;

class Create extends Component
{
    protected $listeners = ['editCrew' => 'mount'];

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
        return view('livewire.crews.create');
    }

    public function store()
    {
      
        Crew::create($this->validate());
        $this->resetForm();
        session()->flash('sucess', 'Fire Incident Save Sucessfull');
    }


    // public function mount(Crew $crew)
    // {
    //     dd($crew);
    // }
    public function resetForm()
    {
     $this->fire_date='';
     $this->name='';
     $this->crew_commander='';


    }
}
