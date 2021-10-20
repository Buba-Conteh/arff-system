<?php

namespace App\Http\Livewire\Fire;

use App\Models\Crew;
use App\Models\Fire;
use App\Models\FireMediums as ModelsFireMediums;
use FireMediums;
use Illuminate\Support\Facades\App;
use Livewire\Component;
// use PDF;

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
    public $fire_medium_id;
    public $crew_id;
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
        'fire_medium_id'=>'required',
        'crew_id'=>'required',
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
        $this->fire_medium_id=$fire->fire_medium_id;
        $this->crew_id=$fire->crew_id;
        $this->extinction_time=$fire->extinction_time;
        $this->crew_commanders_comment=$fire->crew_commanders_comment;
    }
    public function render()
    {
        $crews=Crew::all();
        $fireMediums= ModelsFireMediums::all();
        return view('livewire.fire.edit', compact('crews','fireMediums'));
    }

    public function update(Fire $fire)
    {
       
      if ($fire->update($this->validate())) {
       
        
        session()->flash('sucess', 'Fire Incident Updated Sucessfully');
        // view()->share('fire',$fire);\
        
        $pdf = App::make('dompdf.wrapper');
        $pdf = $pdf->loadView('reports-pdf/fire',['fire'=>$fire] );
        $pdf->save(public_path("storage/fire-reports/fire2.pdf"), true);
        // $pdf->download('fire1.pdf');
      }
     

    }

}
