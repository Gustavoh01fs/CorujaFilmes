@extends('layouts.main')

@section('title', 'Sessões')
@section('menu')
@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque por um Filme</h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Ex: Vingadores Ultimato">
    </form>
</div>
    <div id="cards-container" class="row">

@if($search)
<h3>Resultados para: {{$search}}</h3>
@else
<h2>Veja os filmes disponiveis.</h2>
@endif

         @foreach($filmes as $filme)
             <div class="capa col-lg-2 col-sm-6 col-md-4">    
              <a href="{{$filme -> url}}"><img src="{{$filme -> capa}}"></a>        
            </div>
         @endforeach
@if(count($filmes) == 0)
<p>Sem resultados para {{$search}}</p>
<p>Clique <a href="/">aqui</a> para voltar para página principal! </p>
@endif
    </div>
</div>
@endsection
