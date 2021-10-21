<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\VentaController;
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
Route::get('/inicio', [AuthController::class, 'inicio'])->name('inicio');
Route::get('/venta', [VentaController::class, 'index'])->name('show.venta');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/list-user', [UsuarioController::class, 'index'])->name('user.list-user');
Route::get('/profile/{id}', [UsuarioController::class, 'show'])->name('user.profile');
Route::get('**', function () {
    return redirect('/venta');
});
