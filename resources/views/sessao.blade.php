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
         @foreach($filmes as $filme)
             <div class="capa col-lg-2 col-md-lg-2 col-sm-6 ">    
              <a href="#"><img src="{{$filme -> capa}}"></a>        
            </div>
         @endforeach
    </div>
</div>
@endsection
