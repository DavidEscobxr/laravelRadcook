<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\furrosController;

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

//Route::get('/',HomeController::class);



Route::get('/', [CursoController::class, 'index']);

Route::post('cursos', [CursoController::class,'store'])->name('cursos.store');

Route::get('cursos/create',[CursoController::class,'create']);


Route::get('furros/create',[furrosController::class,'create']);

Route::post('furros', [furrosController::class,'store'])->name('furros.store');