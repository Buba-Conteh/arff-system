<?php

namespace App\Http\Livewire\Fire;

use App\Models\Crew;
use App\Models\Fire;
use Livewire\Component;

class Index extends Component
{
    public $crew = '';
    public $date = '';
    public $fires;
    public $crews;

    public function render()
    {
        $this->fires = Fire::with('fire_medium','crew')->get();
        $this->crews = Crew::all();
        // dd($fires);
        return view('livewire.fire.index');
    }

    public function edit(Fire $fire)
    {
       return redirect('fire/create')->with('fire',$fire);
    }

    public function search()
    {
         $fireQuery= Fire::with('fire_medium','crew');
       
        if ($this->date) {
           $fireQuery->whereDate('fire_date',$this->date);
        }
        if ($this->crew) {
            $fireQuery->where('crew_id', $this->crew);
        }
    //    dd($fireQuery->get());
       return $this->fires = $fireQuery->get();
    }
}
