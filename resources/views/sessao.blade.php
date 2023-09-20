@extends('layouts.main')

@section('title', 'Sessões')
@section('menu')
@section('content')

<h1> Essa é a página de teste em que estou adicionando os filmes.</h1>


<div id="search-container" class="col-md-12">
    <h1>Busque uma sessão</h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Ex: Vingadores Ultimato">
    </form>
</div>
<div id="events-container" class="col-md-12">
    <h2 class="subtitle">Filmes em Cartaz</h2>
    <div id="cards-container" class="row">
         @foreach($filmes as $filme)
            <div class="card col-md-3">
                <img src="{{$filme -> capa}}" alt="{{ $filme -> nome }}">
                <div class="card-body">
                    <p class="card-date">{{$filme -> lançamento}}</p>
                    <h5 class="card-title">{{ $filme -> sinopse }}</h5>
                    <p class="card-participantes">X Telespectadores</p>
                    <a href="#" class="btn btn-primary">Reservar</a>
                </div>
            </div>
         @endforeach

    </div>
</div>
<input type="button" value="Voltar" onClick="JavaScript: window.history.back();" class="bottao">

@endsection

