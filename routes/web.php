<?php

use App\Http\Livewire\Login\Login;
use App\Http\Livewire\Armas\CreateArmas;
use App\Http\Livewire\Armas\DeleteArmas;
use App\Http\Livewire\Armas\EditArmas;
use App\Http\Livewire\Armas\IndexArmas;
use App\Http\Livewire\Armas\ShowArmas;
use App\Http\Livewire\Usuarios\CreateUsuario;
use App\Http\Livewire\Usuarios\DeleteUsuario;
use App\Http\Livewire\Usuarios\EditUsuario;
use App\Http\Livewire\Usuarios\IndexUsuarios;
use App\Http\Livewire\Usuarios\ShowUsuario;
use App\Http\Livewire\Ventas\CreateVentas;
use App\Http\Livewire\Ventas\Deleteventas;
use App\Http\Livewire\Ventas\IndexVentas;
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

Route::get('/login', Login::class)->name('login');
Route::get('/usuarios/create', CreateUsuario::class)->name("createUsuarios");



Route::group(['middleware' => 'auth'], function () {

    Route::get('/', IndexArmas::class)->name("indexarmas");
    Route::get('/arma', IndexArmas::class)->name("indexarmas");
    Route::get('/arma/create', CreateArmas::class)->name("createarmas");
    Route::get('/arma/{arma}/edit', EditArmas::class)->name('editarmas');
    Route::get('/arma/{arma}/show', ShowArmas::class)->name('showarmas');
    Route::get('/arma/{arma}/delete', DeleteArmas::class)->name('deletearmas');



    Route::get('/usuarios', IndexUsuarios::class)->name("indexUsuarios");
    Route::get('/usuarios/{usuario}/edit', EditUsuario::class)->name("editUsuarios");
    Route::get('/usuarios/{usuario}/show', ShowUsuario::class)->name("showUsuarios");
    Route::get('/usuarios/{usuario}/delete', DeleteUsuario::class)->name("deleteUsuarios");


    Route::get('/ventas', IndexVentas::class)->name("indexventas");
    Route::get('/ventas/create', CreateVentas::class)->name('createventas');

    Route::get('/ventas/{venta}/delete', Deleteventas::class)->name('deleteventas');
});
