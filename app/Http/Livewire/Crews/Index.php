<?php

namespace App\Http\Livewire\Crews;

use App\Models\Crew;
use Livewire\Component;

class Index extends Component
{
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
}
