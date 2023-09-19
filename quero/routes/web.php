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

Route::get('/', function () {

    return view('welcome' , []);
});



Route::get('/sessao', function () {

$filme = "Guardiões da Galaxia";
$filmes = ["Vingadores Ultimato", "Capitão América", "Homem de Ferro", "Doutor Estranho", "Pantera Negra", "Homem Aranha"];
    return view('sessao' , [
                'filme' => $filme,
                'filmes' => $filmes
                ]);
});

Route::get('/reserva', function(){
    return view('reserva');
});