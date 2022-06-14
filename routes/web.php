<?php

use App\Http\Controllers\ReservaController;
use App\Http\Controllers\VueloController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::middleware(['auth'])->group(function () {
    
   Route::resource('reservas', ReservaController::class);

   Route::post('/reservas/confirmacion',[ReservaController::class,'confirmacion'])->name('reservas.confirmacion');

   
});


Route::resource('vuelos',VueloController::class)->middleware(['auth', 'can:solo-admin']);



//Route::resource('vuelos', VueloController::class)
//    ->middleware(['auth', 'can:solo-admin']);