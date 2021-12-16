<?php
use App\Http\Controllers\ActividadController;
use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\AlabanzaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DetalleMinisterioController;
use App\Http\Controllers\DiezmoController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\MienbrosController;
use App\Http\Controllers\MinisterioController;
use App\Http\Controllers\OfrendaController;
use App\Http\Controllers\PersonanuevaController;
use App\Http\Controllers\UsuarioController;
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

Route::get('/admin', [AdministradorController::class, 'index'])->name('admin.show')->middleware(['auth', 'admin']);
Route::post('/admin', [AdministradorController::class, 'store'])->name('admin.store')->middleware(['auth', 'admin']);
Route::get('/listaadmin', [AdministradorController::class, 'show'])->name('admin.index')->middleware(['auth', 'admin']);

Route::get('/miembros', [MienbrosController::class, 'index'])->name('miembro.show')->middleware(['auth', 'admin']);
Route::post('/miembros', [MienbrosController::class, 'store'])->name('miembro.store')->middleware(['auth', 'admin']);
Route::get('/miembroslista', [MienbrosController::class, 'show'])->name('miembro.index')->middleware(['auth', 'admin']);
Route::get('/miembros/{id}', [MienbrosController::class, 'edit'])->name('miembro.edit');
Route::put('/miembros/{id}', [MienbrosController::class, 'update'])->name('miembro.update');
Route::get('/pdfmiembros', [MienbrosController::class, 'imprimir'])->name('pdfmiembros.imprimir');

Route::get('/ministerio', [MinisterioController::class, 'index'])->name('ministerio.create')->middleware(['auth', 'admin']);
Route::post('/ministerio', [MinisterioController::class, 'store'])->name('ministerio.store')->middleware(['auth', 'admin']);
Route::get('/ministeriolista', [MinisterioController::class, 'show'])->name('ministerio.show');
Route::get('/ministerio/{id}', [MinisterioController::class, 'edit'])->name('ministerio.edit');
Route::put('/ministerio/{id}', [MinisterioController::class, 'update'])->name('ministerio.update');
Route::get('/pdfministerio', [MinisterioController::class, 'imprimir'])->name('pdfministerio.imprimir');

Route::get('/ofrenda', [OfrendaController::class, 'index'])->name('ofrenda.create');
Route::post('/ofrenda', [OfrendaController::class, 'store'])->name('ofrenda.store');
Route::get('/pdfofrenda', [OfrendaController::class, 'imprimir'])->name('pdfofrenda.imprimir');

/*detalle ministerio */
Route::post('/detalle-ministerio', [DetalleMinisterioController::class, 'store'])->name('detalle_ministerio.store');
Route::get('/listadetalle/{id}', [DetalleMinisterioController::class, 'show'])->name('listadetalle.show');
Route::get('/pdfdetalleM/{id}', [DetalleMinisterioController::class, 'imprimir'])->name('pdfdetalleM.imprimir');

Route::get('/diezmos', [DiezmoController::class, 'index'])->name('diezmos.create');
Route::post('/diezmos', [DiezmoController::class, 'store'])->name('diezmos.store');
Route::get('/listadiezmos', [DiezmoController::class, 'show'])->name('diezmos.show');
Route::get('/diezmos/{id}', [DiezmoController::class, 'edit'])->name('diezmos.edit');
Route::put('/diezmos/{id}', [DiezmoController::class, 'update'])->name('diezmos.update');
Route::get('/pdfdiezmo', [DiezmoController::class, 'imprimir'])->name('pdfdiezmo.imprimir');

Route::get('/persona', [PersonanuevaController::class, 'index'])->name('persona.index');
Route::post('/persona', [PersonanuevaController::class, 'store'])->name('persona.store');
Route::get('/listapersona', [PersonanuevaController::class, 'show'])->name('listapersona.show');
Route::get('/listapersona/{id}', [PersonanuevaController::class, 'mostrar_persona'])->name('listapersona.show.one');
Route::post('/listapersona-store', [PersonanuevaController::class, 'store_modal'])->name('listapersona.store.modal');
Route::get('/pdfpersona', [PersonanuevaController::class, 'imprimir'])->name('pdfpersona.imprimir');

Route::get('/actividad', [ActividadController::class, 'index'])->name('actividad.create');
Route::post('/actividad', [ActividadController::class, 'store'])->name('actividad.store');
Route::get('/listaActividad', [ActividadController::class, 'show'])->name('actividad.show');

Route::get('/alabanza', [AlabanzaController::class, 'index'])->name('alabanza.create');
Route::post('/alabanza', [AlabanzaController::class, 'store'])->name('alabanza.store');
Route::get('/listaAlabanza', [AlabanzaController::class, 'show'])->name('alabanza.show');
Route::get('/pdfalabanza', [AlabanzaController::class, 'imprimir'])->name('pdfalabanza.imprimir');