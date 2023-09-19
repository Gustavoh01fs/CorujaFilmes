<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class filmecontroller extends Controller
{
    public function index(){
        return view('welcome' , []);
    }

    public function cadmovie(){
        return view('filmes.create');
    } 

    public function sessao(){
    
        $filme = "Guardiões da Galaxia";
        $filmes = ["Vingadores A Era de Ultron", "Vingadores Ultimato", "Capitão América", "Homem de Ferro", "Doutor Estranho", "Pantera Negra", "Homem Aranha"];

        return view('sessao', [
                'filme' => $filme,
                'filmes' => $filmes
                ]);
    }

    public function reserva(){
        return view('reserva');
    }
}
