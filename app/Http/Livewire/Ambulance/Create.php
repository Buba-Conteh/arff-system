<?php

namespace App\Http\Livewire\Ambulance;

use App\Models\Ambulance;
use App\Models\Crew;
use Livewire\Component;

class Create extends Component
{
    public $date;
    public $call_time;
    public $patient_name;
    public $patient_address;
    public $caller_name;
    public $time_collected;
    public $depature_time;
    public $hospital_arrival_time;
    public $crew_id;
    public $handed_time;
    public $Officer_in_charge;
    public $crew_commander;

    protected $rules = [
        'Officer_in_charge' => 'required',
        'date' => 'required',
        'patient_address'=>'required',
         'patient_name'=>'required',
        'caller_name'=>'required',
        'call_time'=>'required',
        'time_collected'=>'required',
        'depature_time'=>'required',
        'hospital_arrival_time'=>'required',
        'crew_id'=>'required',
        'handed_time'=>'required',
        'crew_commander'=>'required'

        
    ];
    public function render()
    {
        $crews= Crew::all();
        return view('livewire.ambulance.create', compact('crews'));
    }

    public function store()
    {
        
        //  dd($this->validate()) ;
        
        Ambulance::create($this->validate());
        $this->resetForm();
        session()->flash('sucess', 'Ambulance Incident Save Sucessfull');

        
    }

    public function resetForm()
    {
        $this->date='';
        $this->call_time='';
        $this->patient_name='';
        $this->patient_address='';
        $this->caller_name='';
        $this->time_collected='';
        $this->depature_time='';
        $this->hospital_arrival_time='';
        $this->crew_id='';
        $this->handed_time='';
        $this->Officer_in_charge='';
        $this->crew_commander='';

    }

}
