<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\ScoreController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\IndexPeople;
use App\Http\Livewire\IndexCategory;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/evaluar', function () {
    return view('evaluar');
})->name('evaluar');


Route::get('/evaluacion', function () {
    return view('livewire.index-people');
})->name('livewire.index-people');


/////catalogos principal,,, aqui estan todos las rutas a catalogos
Route::resource('category',CategoryController::class);
/////catalogos principal,,, aqui estan todos las rutas a catalogos
Route::resource('people',PeopleController::class);
/////catalogos principal,,, aqui estan todos las rutas a catalogos
Route::resource('score',ScoreController::class);
///////////
Route::get('/evaluaciones',IndexPeople::class, 'index-people')->name ('peoples.indexlivewire');
Route::get('/categorias',IndexCategory::class, 'index-category')->name ('categories.indexlivewire');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
