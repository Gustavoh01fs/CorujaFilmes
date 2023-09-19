<?php

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

use App\Http\Controllers\filmecontroller;


Route::get('/', [filmecontroller::class, 'index']);
Route::get('/filmes/create', [filmecontroller::class, 'cadmovie']);
Route::get('/sessao', [filmecontroller::class, 'sessao']);
Route::get('/reserva', [filmecontroller::class, 'reserva']);

/*
Route::get('/adm/{id}', function ($id = adm){
    return view('adm', ['id' => $id]);
});
*/
