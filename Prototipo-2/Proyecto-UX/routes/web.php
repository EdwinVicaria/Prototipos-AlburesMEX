<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlburController;
use App\Http\Controllers\AlbursController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\ShowUsers;
use App\Http\Livewire\ShowAlbur;
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

Route::resource('alburs', AlburController::class);

Route::resource('usuarios', UserController::class)->middleware(['auth']);

Route::get('/albures',[AlbursController::class, 'index'])->name('index');

//Route::get('/albures',IndexAlbur::class);

Route::get('/users',ShowUsers::class);

Route::get('/albures',ShowAlbur::class)->name('albures');
//Route::get('/albures/{albur}/edit', [AlburController::class, 'edit'])->name('alburs');
//Route::get('/albures/{alburs}/edit',[AlburController::class, 'edit'])->name('edit');

//Route::view('/conocer-mas', 'alburs.conocermas', [AlburController::class, 'conocermas'])->name('conocermas');
Route::get('/diccionario-de-albures',[AlbursController::class, 'conocermas'])->name('conocermas');
Route::get('/mis-albures',[AlburController::class, 'propios'])->middleware(['auth'])->name('propios');

Route::view('/nosotros','alburs.nosotros')->name('nosotros');

Route::view('/historia','alburs.historia')->name('historia');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
