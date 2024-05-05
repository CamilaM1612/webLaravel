<?php

use App\Http\Controllers\RegistroController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarreraController;
use App\Http\Controllers\MateriaController;

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
Route::post('/registrar-usuario', [RegistroController::class, 'registrar'])->name('registrarUsuario');

Route::get('/', function () {
    return view('registro');
});
Route::get('/inicioSesion', function () {
    return view('login');
});
Route::get('/perfil', function () {
    return view('pages.perfil');
});
Route::get('/pensum', function () {
    return view('pages.pensum');
});

//admin
Route::get('/admin/carrera', [CarreraController::class, 'index'])->name('admin.carrera');
Route::post('/registrar-carrera', [CarreraController::class, 'registrarCarrera'])->name('registrar.carrera');


Route::get('/admin/materia/{codigoCarrera}', [MateriaController::class, 'show'])->name('show.materia');
Route::post('/upload-csv', [MateriaController::class, 'uploadCsv'])->name('upload.csv');
