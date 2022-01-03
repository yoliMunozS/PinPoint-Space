<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SpaceController;
use App\Http\Controllers\BookingController;

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
//Rutas de inicio
Route::get('/', function () {
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});
Route::get('/home', function () {
    return view('index');
});

//Ruta para cuando ya estás registrado
Route::get('/loginIn', function () {
    return view('loginIn');
});

//Ruta de prueba
// Route::get('/index2', function () {
//     return view('index2');
// });

Auth::routes();

Route::get('/loginIn', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/{id}/space/index', [\App\Http\Controllers\loginController::class, 'show']);
Route::get('/{id}/booking/index', [\App\Http\Controllers\loginController::class, 'show']);


// Lo comento por repetición
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Enrutado de espacios  sólo a usuarios registrados
Route::resource('spaces', SpaceController::class)-> middleware('auth');

// Enrutado de reserva espacios sólo a usuarios registrados
Route::resource('bookings', BookingController::class) -> middleware('auth');

// Ruta peticiones pendientes de espacios 
//Route::get('space/{id}',[SpaceController::class,'show']) -> name('space.show');

// Ruta para reservar desde la página space
Route::get('space/{id}', [BookingController::class, 'booking']) -> name('bookings.booking');