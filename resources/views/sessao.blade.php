@extends('layouts.main')

@section('title', 'CorujaFilmes')

@section('content')


<div id="events-container" class="col-md-12">
    <h2>Próximos lançamentos</h2>
        <p>Veja os filmes que serão lançados em breve</p>
        <div id="cards-container" class="row">
        @foreach($breve as $brev)
             <div class="capa col-lg-2 col-sm-6 col-md-4">    
              <a href="{{$brev -> url}}"><img src="{{$brev -> capa}}"></a>        
            </div>
         @endforeach
        </div>
</div>
@endsection