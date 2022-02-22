<?php

namespace App\Http\Livewire\Personnel;

use App\Models\Crew;
use App\Models\Personnel;
use App\Models\Rank;
use FontLib\Table\Type\name;
use Illuminate\Validation\Rule;
use Livewire\Component;
// use Mediconesystems\LivewireDatatables\Column;
// use Mediconesystems\LivewireDatatables\DateColumn;
// use Mediconesystems\LivewireDatatables\NumberColumn;
// use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class Index extends Component
{
    public $personnel;
    public $name;
    public $address;
    public $phone;
    public $rank_id;
    public $crew_id;

    public $model = User::class;


    protected  function rules () {
         return  [
            'name' => [ 
                Rule::unique('personnels','name')->ignore($this->personnel),
                'required', 
                ],
            'phone' => 'required',
            'address' => 'required',
            'rank_id' => 'required',
            'crew_id' => 'required'
    
        ];
    
    }
    public function render()
    {
        $ranks = Rank::all();
        $crews = Crew::all();
        $personnels = Personnel::class;
        return view('livewire.personnel.index', compact('ranks', 'personnels', 'crews'));
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
        $this->crew_id = $personnel->crew_id;
    }
    public function update()
    {
        $personnel = Personnel::find($this->personnel);
        $personnel->update($this->validate());
        session()->flash('sucess', 'Rank Successfully updated');
    } 
    
    // public function columns()
    // {
    //     return [
    //         NumberColumn::name('id')->filterable(),

    //         Column::name('name')->filterable()->searchable(),

    //         Column::name('email')->truncate()->filterable()->searchable(),

    //         DateColumn::name('created_at')->filterable(),

    //         Column::callback(['id', 'name'], function ($id, $name) {
    //             return view('table-actions', ['id' => $id, 'name' => $name]);
    //         })->unsortable()
    //     ];
    // }



}
