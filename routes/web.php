<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\MienbrosController;
use App\Http\Controllers\MinisterioController;
use App\Http\Controllers\DiezmoController;
use App\Http\Controllers\OfrendaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\DetalleMinisterioController;
use App\Http\Controllers\AdministradorController;

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
/*Route::get('/', function () {
    if (Auth::check()) {
        return redirect('/venta');
    } else {
        return view('dashboard.auth.login');
    }
});*/
Route::get('/', [AuthController::class, 'index'])->name('showlogin');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/inicio', [InicioController::class, 'index'])->name('inicio.show');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/list-user', [UsuarioController::class, 'index'])->name('user.list-user');
Route::get('/profile/{id}', [UsuarioController::class, 'show'])->name('user.profile');
Route::get('**', function () {
    return redirect('/inicio');
});


Route::get('/admin', [AdministradorController::class, 'index'])->name('admin.show');
Route::post('/admin', [AdministradorController::class, 'store'])->name('admin.store');
Route::get('/listaadmin', [AdministradorController::class, 'show'])->name('admin.index');

Route::get('/miembros', [MienbrosController::class, 'index'])->name('miembro.show');
Route::post('/miembros', [MienbrosController::class, 'store'])->name('miembro.store');
Route::get('/miembroslista', [MienbrosController::class, 'show'])->name('miembro.index');
Route::get('/miembros/{id}', [MienbrosController::class, 'edit'])->name('miembro.edit');
Route::put('/miembros/{id}', [MienbrosController::class, 'update'])->name('miembro.update');


Route::get('/ministerio', [MinisterioController::class, 'index'])->name('ministerio.create');
Route::post('/ministerio', [MinisterioController::class, 'store'])->name('ministerio.store');
Route::get('/ministeriolista', [MinisterioController::class, 'show'])->name('ministerio.show');
Route::get('/ministerio/{id}', [MinisterioController::class, 'edit'])->name('ministerio.edit');
Route::put('/ministerio/{id}', [MinisterioController::class, 'update'])->name('ministerio.update');


Route::get('/ofrenda', [OfrendaController::class, 'index'])->name('ofrenda.create');
Route::post('/ofrenda', [OfrendaController::class, 'store'])->name('ofrenda.store');
/*detalle ministerio */
Route::post('/detalle-ministerio', [DetalleMinisterioController::class, 'store'])->name('detalle_ministerio.store');

Route::get('/diezmos', [DiezmoController::class, 'index'])->name('diezmos.create');
Route::post('/diezmos', [DiezmoController::class, 'store'])->name('diezmos.store');
Route::get('/listadiezmos', [DiezmoController::class, 'show'])->name('diezmos.show');


Route::get('/listadetalle/{id}', [DetalleMinisterioController::class, 'show'])->name('listadetalle.show');


