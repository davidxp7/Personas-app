<?php

use App\Http\Controllers\ComunaController;
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


/*Route::get('/comunas', [ComunaController::class, 'index']);*/

Route::get("/comunas", [ComunaController::class,"index"])->name("comunas.index");

//ruta para añadir un nuevo registro
Route::get("/nuevo-registro", [ComunaController::class,"create"])->name("comunas.create");

// ruta para editar un registro
Route::post("/editar-registro", [ComunaController::class,"update"])->name("comunas.update");

// ruta para eliminar un producto
Route::get("/eliminar-registro-{id}", [ComunaController::class,"delete"])->name("comunas.delete");

