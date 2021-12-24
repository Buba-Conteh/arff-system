<?php

namespace App\Http\Livewire\Leave;

use App\Models\AnnualLeave;
use App\Models\Personnel;
use Carbon\Carbon;
use Illuminate\Support\Carbon as SupportCarbon;
use Livewire\Component;

class Index extends Component
{
    public $personnel_id;
    public $startDate;
    public $endDate;
    public $numberOfDays;


    protected $rules = [
        'personnel_id' => 'required',
        'startDate' => 'required',
        'endDate'=>'required',
        'numberOfDays'=>'numeric',

        
    ];

    public function render()
    {
        $leaves =  AnnualLeave::with('personnel');
        $personnels = Personnel::all();
        return view('livewire.leave.index', compact('leaves', 'personnels'));
    }
    public function updatedStartDate()
    {
       
        $this->endDate = SupportCarbon::createFromDate($this->startDate)->addWeekdays($this->numberOfDays)->format('l jS F Y');
    }
    public function updatedNumberOfDays()
    {
        
        $this->endDate = SupportCarbon::createFromDate($this->startDate)->addWeekdays($this->numberOfDays)->format('l jS F Y');

    }

    public function store()
    {
        // AnnualLeave::create($this->validate());
        $attributes = $this->validate();
        $annualLeave = new AnnualLeave();

        $annualLeave->personnel_id = $attributes['personnel_id'];
        $annualLeave->start_date = $attributes['startDate'];
        $annualLeave->end_date = $attributes['endDate'];
        $annualLeave->number_of_days = $attributes['numberOfDays'];
        $annualLeave->save();

        session()->flash('sucess', 'Annual Leave Save Sucessfull');
        $this->resetValidation();
    }


    public function edit(AnnualLeave $annualLeave)
    {
        $this->personnel_id = $annualLeave->personnel_id;
        $this->startDate = $annualLeave->startDate;
        $this->endDate = $annualLeave->endDate;
        $this->numberOfDays = $annualLeave->numberOfDays;
        // $this->rank_id = $personnel->rank_id;
    }

    public function update()
    {
        // $personnel = AnnualLeave::find($this->personnel);
        // $personnel->update($this->validate());
        // session()->flash('sucess', 'Rank Successfully updated');
    }
}
