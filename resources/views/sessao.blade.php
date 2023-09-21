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
<div id="events-container" class="col-md-4">

    <div id="cards-container" class="row">
         @foreach($filmes as $filme)
             <div class="card col-md-4 ">
                    
                 <img src="{{$filme -> capa}}" alt="{{ $filme -> nome }}" >
                    
            </div>
         @endforeach
    </div>

</div>

@endsection

