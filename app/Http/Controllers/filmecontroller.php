<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Filme;

use App\Models\Lancamento;

class filmecontroller extends Controller
{
    public function index(){
        
        $lancamento = Lancamento::all();

        return view('welcome' , ['lancamento' => $lancamento]);
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
