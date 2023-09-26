@extends('layouts.main')

@section('title', 'CorujaFilmes')

@section('content')


<div id="events-container" class="col-md-12">
    <h2>Próximos filmes</h2>
        <p>Veja os filmes que serão lançados em breve</p>
        <div id="cards-container" class="row">
            @foreach($lancamento as $lanc)
            <div class="capa col-lg-2 col-md-2 col-sm-6">
               <a href=""><img src="{{$lanc -> capa}}"></a>
            </div>
            @endforeach
        </div>
</div>
@endsection