<?php

use App\Http\Controllers\CurriculoController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Models\User;
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

// Rotas Curriculos Auth
Route::middleware(['auth'])->group(function () { 
    Route::get('/curriculos', [CurriculoController::class, 'index'])->name('curriculos.index');
    Route::get('/curriculos/create', [CurriculoController::class, 'create'])->name('curriculos.create');
    Route::post('/curriculos/store', [CurriculoController::class, 'store'])->name('curriculos.store');
    Route::get('/curriculo/{id}/edit', [CurriculoController::class, 'edit'])->name('curriculos.edit');
    Route::put('/curriculo/update/{id}', [CurriculoController::class, 'update'])->name('curriculos.update');
    Route::get('/curriculo/{id}', [CurriculoController::class, 'showPrint'])->name('curriculos.show_print');

});

Route::controller(CurriculoController::class)->group(function () {
    Route::get('/curriculo/{id}', 'showPrint')->name('curriculos.show_print');
    Route::get('/curriculos','index')->name('curriculos.index');
    Route::get('/curriculos/createwr', 'createWithoutRegistration')->name('curriculos.cwr');
    Route::post('/curriculo/print', 'cwrPrint')->name('curriculos.cwrprint');

});


// middleware AdminAccess
Route::middleware(['admin'])->group(function () { 
    Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/user/update/{id}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::get('/users/dashboard', [UserController::class, 'dashboard'])->name('users.dashboard'); 
});


// Rotas Users
Route::controller(UserController::class)->group(function () {
    Route::get('/users/create', 'create')->name('users.create');   
    Route::get('/register','create')->name('register');
    Route::post('/users', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/login/auth', 'auth')->name('usuario.auth');
    Route::post('/logout', 'logout')->name('logout'); // Alias Route
});

