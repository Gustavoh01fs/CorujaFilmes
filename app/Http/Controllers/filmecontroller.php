<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Filme;

class filmecontroller extends Controller
{
    public function index(){

        return view('welcome' , []);
    }

    public function cadmovie(){
        return view('filmes.create');
    } 

    public function sessao(){
    
        $filmes = Filme::all();

        return view('sessao', ['filmes' => $filmes]);
    }

    public function reserva(){
        return view('reserva');
    }
}
