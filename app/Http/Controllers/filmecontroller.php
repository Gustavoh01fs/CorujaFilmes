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
            $filmes = Filme::whereIn('status', [0])->get();
        }
        

        return view('welcome' ,['filmes' => $filmes, 'search' => $search]);
    }

    public function cadmovie(){

        return view('filme.create');
    } 

    public function sessao(){

        $breve = Filme::whereIn('status', [1])->get();


        return view('sessao', ['breve' => $breve]);
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


        if($quest->ofilme == 1){
        return redirect('/sessao')->with('msg', 'Filme adicionado com sucesso!');
        }
        else{
        return redirect('/')->with('msg', 'Filme adicionado com sucesso!');
        }

    }
}
