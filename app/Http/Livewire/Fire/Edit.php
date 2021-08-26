<?php

namespace App\Http\Livewire\Fire;

use App\Models\Fire;
use Livewire\Component;

class Edit extends Component

{
    public $fire_id;
    public $fire_date;
    public $call_time;
    public $depature_time;
    public $call_nature;
    public $fire_nature;
    public $materials_involve;
    public $fire_caurse;
    public $medium;
    public $crew;
    public $extinction_time;
    public $crew_commanders_comment;
    protected $rules = [
        'fire_date' => 'required',
        'call_time' => 'required',
        'depature_time'=>'required',
        'call_nature'=>'required',
        'fire_nature'=>'required',
        'materials_involve'=>'required',
        'fire_caurse'=>'required',
        'medium'=>'required',
        'crew'=>'required',
        'extinction_time'=>'required',
        'crew_commanders_comment'=>'required'

        
    ];
    public function mount(Fire $fire)
    {
        $this->fire_id=$fire->id;
        $this->fire_date=$fire->fire_date;
        $this->call_time=$fire->call_time;
        $this->depature_time=$fire->depature_time;
        $this->call_nature=$fire->call_nature;
        $this->fire_nature=$fire->fire_nature;
        $this->materials_involve=$fire->materials_involve;
        $this->fire_caurse=$fire->fire_caurse;
        $this->medium=$fire->medium;
        $this->crew=$fire->crew;
        $this->extinction_time=$fire->extinction_time;
        $this->crew_commanders_comment=$fire->crew_commanders_comment;
    }
    public function render()
    {
        return view('livewire.fire.edit');
    }

    public function update(Fire $fire)
    {
      $fire->update($this->validate());
      session()->flash('sucess', 'Fire Incident Updated Sucessfully');

    }

}
