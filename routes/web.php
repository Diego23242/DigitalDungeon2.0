<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\User;
use App\Models\Registropersonas; // Agrega esta línea
use App\Http\Controllers\RegistropersonasController;
use App\Http\Controllers\ComentariospersonController;


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


Route::view('/categoriaccion', 'accion')->name('accion');
Route::view('/categoriaventura', 'aventura')->name('aventura');
Route::view('/categoricarro', 'carros')->name('carros');
Route::view('/comentario', 'comentario')->name('comentarios');
Route::view('/categoriaestrategia', 'estrategia')->name('estrategia');
Route::view('/login', 'login')->name('login');
Route::view('/categoriaplataformas', 'plataformas')->name('plataformas');
Route::view('/categoriaretro', 'retro')->name('retro');
Route::view('/categoriasimulacion', 'simulacion')->name('simulacion');
Route::view('/categoriaterror', 'terror')->name('terror');
Route::view('/inicio', 'index')->name('inicio');
Route::view('/registro', 'registro')->name('registros');
Route::get('/create', [RegistropersonasController::class, 'create'])->name('personas.create');
Route::get('/edit', [RegistropersonasController::class, 'edit'])->name('personas.edit');
Route::get('/show', [RegistropersonasController::class, 'show'])->name('personas.show');
Route::get('/indexregistro', [RegistropersonasController::class, 'indexregistro'])->name('personas.index');

Route::post('/storeregistro',[RegistropersonasController::class, 'storeregistro'])->name('personas.store');


Route::post('/storescomentario', [ComentariospersonController::class, 'storescomentario'])->name('comentario.store');
Route::get('/indexcomentario', [ComentariospersonController::class, 'indexcomentario'])->name('comentarios.index');


