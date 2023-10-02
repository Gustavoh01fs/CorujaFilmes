<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Filme;

class filmecontroller extends Controller
{
    public function index(){

        $search = request('search');
        
        if($search){

            $filmes = Filme::where([
                ['nome', 'like', '%' . $search . '%']
            ])->get();

        } else{
            $filmes = Filme::all();
        }
        

        return view('welcome' ,['filmes' => $filmes, 'search' => $search]);
    }

    public function cadmovie(){
        return view('filme.create');
    } 

    public function sessao(){

        return view('sessao', []);
    }

    public function reserva(){
        return view('reserva');
    }
    
    public function store(Request $quest){
        
        $filmme = new Filme;

        $imgname = $quest->file('cap')->getClientOriginalName();
        $path = '/img/';
        $paths = $path . $imgname;

        $filmme->nome = $quest->nfilme;
        $filmme->url = $quest->ufilme;
        $filmme->status = $quest->ofilme;
        $filmme->capa = $paths;

        $filmme -> save();

        return redirect('/')->with('msg', 'Filme adicionado com sucesso!');


    }
}
