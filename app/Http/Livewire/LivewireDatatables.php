<?php
namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Ld;
use App\Models\Personnel;
use Illuminate\Support\Str;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class LivewireDatatables extends LivewireDatatable
{
    public $model = Personnel::class;

    public function builder()
    {
        return Personnel::with('crew');
    }


    function columns()
    {
    	return [
            
    		NumberColumn::name('id')->label('ID')->sortBy('id'),
    		Column::name('name')->label('Name') ->searchable(),
    		Column::name('phone')->label('Phone number'),
    		Column::name('address')->label('Address'),
    		Column::name('crew.name')->label('Crew')->searchable(),
    		DateColumn::name('created_at')->label('Creation Date')->searchable(),

            Column::callback(['id', 'name'], function ($id, $name) {
                return view('table-actions', ['id' => $id, 'name' => $name]);
            })->unsortable()
    	];
    }
}