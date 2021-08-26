<?php

use App\Http\Livewire\Crews\Create;
use App\Http\Livewire\Crews\Index as CrewsIndex;
use App\Http\Livewire\Fire\CreateForm;
use App\Http\Livewire\Fire\Edit;
use App\Http\Livewire\Fire\Index;
use App\Http\Livewire\Fire\View;
use App\Http\Livewire\FireMediums\Create as FireMediumsCreate;
use App\Http\Livewire\FireMediums\Index as FireMediumsIndex;
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
    return view('welcome');
    
});

Route::middleware(['auth:sanctum', 'verified'])->get('/fire', Index::class);
Route::middleware(['auth:sanctum', 'verified'])->get('/fire/create', CreateForm::class);
Route::middleware(['auth:sanctum', 'verified'])->get('/fire/edit/{fire}', Edit::class);
Route::middleware(['auth:sanctum', 'verified'])->get('/fire/view/{fire}', View::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/crews', CrewsIndex::class);
Route::middleware(['auth:sanctum', 'verified'])->get('/crews/create', Create::class);
// Route::middleware(['auth:sanctum', 'verified'])->get('/fire/create', CreateForm::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/fire-meduims', FireMediumsIndex::class);
Route::middleware(['auth:sanctum', 'verified'])->get('/fire-meduims/create', FireMediumsCreate::class);




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
