<?php

use App\Http\Livewire\Ambulance\Create as AmbulanceCreate;
use App\Http\Livewire\Ambulance\Index as AmbulanceIndex;
use App\Http\Livewire\Ambulance\View as AmbulanceView;
use App\Http\Livewire\Crews\Create;
use App\Http\Livewire\Crews\Index as CrewsIndex;
use App\Http\Livewire\Fire\CreateForm;
use App\Http\Livewire\Fire\Edit;
use App\Http\Livewire\Fire\Index;
use App\Http\Livewire\Fire\View;
use App\Http\Livewire\FireMediums\Create as FireMediumsCreate;
use App\Http\Livewire\FireMediums\Index as FireMediumsIndex;
use App\Http\Livewire\Personnel\Index as PersonnelIndex;
use App\Http\Livewire\Ranks\Index as RanksIndex;
use App\Models\Fire;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
    
});

Route::prefix('fire')->middleware(['auth:sanctum', 'verified'])->group( function ()
{
 
    Route::get('/', Index::class);
    Route::get('/create', CreateForm::class);
    Route::get('/edit/{fire}', Edit::class);
    Route::get('/view/{fire}', View::class);   # code...
});
   
    
Route::prefix('crews')->middleware(['auth:sanctum', 'verified'])->group( function ()
{

    Route::get('/', CrewsIndex::class);
    Route::get('/create', Create::class);
// Route::middleware(['auth:sanctum', 'verified'])->get('/fire/create', CreateForm::class);
});

Route::prefix('fire-meduims')->middleware(['auth:sanctum', 'verified'])->group( function ()
{
    Route::get('/', FireMediumsIndex::class);
    Route::get('/create', FireMediumsCreate::class);
});


Route::prefix('ambulance')->middleware(['auth:sanctum', 'verified'])->group( function ()
{
    Route::get('/', AmbulanceIndex::class);
    Route::get('/create', AmbulanceCreate::class);
    Route::get('/ambulance/view/{ambulance}', AmbulanceView::class);
});

Route::prefix('ranks')->middleware(['auth:sanctum', 'verified'])->group( function ()
{
    Route::get('/', RanksIndex::class);

});


Route::prefix('personnel')->middleware(['auth:sanctum', 'verified'])->group( function ()
{
    Route::get('/', PersonnelIndex::class);

});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

