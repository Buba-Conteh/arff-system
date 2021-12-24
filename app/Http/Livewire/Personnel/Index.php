<?php

namespace App\Http\Livewire\Personnel;

use App\Models\Personnel;
use App\Models\Rank;
use Livewire\Component;

class Index extends Component
{
    public $personnel;
    public $name;
    public $address;
    public $phone;
    public $rank_id;

    protected $rules = [
        'name' => 'required',
        'phone' => 'required',
        'address' => 'required',
        'rank_id' => 'required',


    ];

    public function render()
    {
        $ranks = Rank::all();
        $personnels = Personnel::with('rank')->get();
        return view('livewire.personnel.index', compact('ranks', 'personnels'));
    }

    public function store()
    {

        Personnel::create($this->validate());
        session()->flash('sucess', 'Fire Incident Save Sucessfull');
        $this->resetValidation();
    }

    public function edit(Personnel $personnel)
    {
        $this->personnel = $personnel->id;
        $this->name = $personnel->name;
        $this->phone = $personnel->phone;
        $this->address = $personnel->address;
        $this->rank_id = $personnel->rank_id;
    }
    public function update()
    {
        $personnel = Personnel::find($this->personnel);
        $personnel->update($this->validate());
        session()->flash('sucess', 'Rank Successfully updated');
    }
}
