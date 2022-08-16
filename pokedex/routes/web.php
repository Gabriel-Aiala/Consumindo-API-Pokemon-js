<?php
use App\Http\Controllers\pokeController;
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

Route::get('/',[pokeController::class,'buscar'])->name('index');
Route::get('/search',[pokeController::class,'search'])->name('search');
Route::get('/detail/{id}',[pokeController::class,'detail'])->name('detail');
Route::get('/error',[pokeController::class,'error'])->name('error');
