<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\SalaController;
use App\Http\Controllers\TipoSalaController;
use App\Http\Controllers\PermisoController;
use Illuminate\Support\Facades\Route;
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
/****************************************************** INICIO DE CLIENTE ***********************************************/

Route::get('/', function () {return view('index');});

/*************************************************** FIN DE CLIENTE ******************************************************/

/****************************************************** INICIO DE ADMINISTRADOR ******************************************/

//METODOS DE USUARIO 
Route::get('/iniciar', [UsuarioController::class, 'iniciar'])->name('iniciar');
Route::post('/verificar',[UsuarioController::class, 'verificar'])->name('verificar');
Route::get('/registrar', [UsuarioController::class, 'registrar'])->name('registrar');
Route::get('/mostraruser', [UsuarioController::class, 'show'])->name('mostraruser');
Route::get('/crearuser', [UsuarioController::class, 'create'])->name('crearuser');
Route::post('/nuevouser', [UsuarioController::class, 'store'])->name('nuevouser');
Route::get('/editaruser/{id}', [UsuarioController::class, 'edit'])->name('editaruser');
Route::post('/updateuser', [UsuarioController::class, 'update'])->name('updateuser');
Route::delete('/borraruser/{id}', [UsuarioController::class, 'destroy'])->name('borraruser');

//METODOS DE PERMISO
Route::get('/mostrarpermiso', [PermisoController::class, 'show'])->name('mostrarpermiso');
Route::post('/nuevopermiso', [PermisoController::class, 'store'])->name('nuevopermiso');
Route::get('/crearpermiso', [PermisoController::class, 'create'])->name('crearpermiso');
Route::get('/editarpermiso/{id}', [PermisoController::class, 'edit'])->name('editarpermiso');
Route::post('/updatepermiso', [PermisoController::class, 'update'])->name('updatepermiso');
Route::delete('/borrarpermiso/{id}', [PermisoController::class, 'destroy'])->name('borrarpermiso');
//METODOS DE TIPO DE SALA 
Route::get('/mostrartipo', [TipoSalaController::class, 'show'])->name('mostrartipo');
Route::get('/creartipo', [TipoSalaController::class, 'create'])->name('creartipo');
Route::post('/nuevotipo', [TipoSalaController::class, 'store'])->name('nuevotipo');
Route::get('/editartipo/{id}', [TipoSalaController::class, 'edit'])->name('editartipo');
Route::post('/updatetipo', [TipoSalaController::class, 'update'])->name('updatetipo');
Route::delete('/borrartipo/{id}', [TipoSalaController::class, 'destroy'])->name('borrartipo');

//METODOS DE SALA
Route::get('/escritorio', [SalaController::class, 'index'])->name('escritorio');
Route::get('/mostrarsala', [SalaController::class, 'show'])->name('mostrarsala');
Route::get('/crearsala', [SalaController::class, 'create'])->name('crearsala');
Route::post('/nuevasala', [SalaController::class, 'store'])->name('nuevasala');
Route::get('/editarsala/{id}', [SalaController::class, 'edit'])->name('editarsala');
Route::post('/updatesala', [SalaController::class, 'update'])->name('updatesala');
Route::delete('/borrarsala/{id}', [SalaController::class, 'destroy'])->name('borrarsala');



/*************************************************** FIN DE ADMINISTRADOR ********************************************/


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
