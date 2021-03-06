<?php

namespace App\Http\Livewire\Fire;

use App\Models\Crew;
use App\Models\Fire;
use App\Models\FireMediums;
use Carbon\Carbon;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\App;
use Livewire\Component;
use Barryvdh\DomPDF\PDF;

class CreateForm extends Component
{
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

    public function render()
    {
        $crews= Crew::all();
        $fireMediums= FireMediums::all();
        return view('livewire.fire.create-form', compact('crews', 'fireMediums'));
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function store()
    {
        
        $pdfName='fire'.now().'.pdf';
        $attribute = $this->validate();
        $attribute['pdf_url']=$pdfName;
        $fire = Fire::create($attribute);
        session()->flash('sucess', 'Fire Incident Save Sucessfull');
        $this->resetValidation();
        $pdfName='fire'.now().'.pdf';
        $pdf = App::make('dompdf.wrapper');
        $pdf = $pdf->loadView('reports-pdf/fire',['fire'=>$fire] );
        $pdf->save(public_path("storage/fire-reports/".$pdfName), true);

    }

    public function resetForm()
    {
        $this->fire_date='';
         $this->call_time='';
         $this->depature_time='';
         $this->call_nature='';
         $this->fire_nature='';
         $this->materials_involve='';
         $this->fire_caurse='';
         $this->fire_medium_id='';
         $this->crew_id='';
         $this->extinction_time='';
         $this->crew_commanders_comment='';
    }
}
