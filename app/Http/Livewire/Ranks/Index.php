<?php

namespace App\Http\Livewire\Ranks;

use App\Models\Rank;
use Livewire\Component;

class Index extends Component
{

    public $name;
    public $short_hand;
    public $rankToUpdate;
    public $rank;
    protected $rules = [
        'name'=>'required|unique:crews,name',
       'short_hand'=>'nullable',        
    ];
    public function render()
    {
        $ranks=Rank::all();
        return view('livewire.ranks.index', compact('ranks'));
    }


    public function store()
    {
      
        Rank::create($this->validate());
        session()->flash('sucess', 'Fire Incident Save Sucessfull');
        $this->resetValidation();
    }

    public function edit(Rank $rank)
    {
       $this->rank=$rank->id;
    //   $this->rankToUpdate=$rank;
     $this->name = $rank->name;
     $this->short_hand = $rank->short_hand;
    }

public function update()
{
    $rank=Rank::find($this->rank);
    // dd($this->validate());
    $rank = $rank->update($this->validate());
   session()->flash('sucess', 'Rank Successfully updated');
}

}
