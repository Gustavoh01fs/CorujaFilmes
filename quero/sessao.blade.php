@extends('layouts.main')

@section('title', 'Sessões')
@section('menu')
@section('content')

<h1> Essa é a página de teste em que estou adicionando os filmes.</h1>


@foreach($filmes as $movie)
<p class="nomovie"> {{$movie}}</p>
@endforeach



<input type="button" value="Voltar" onClick="JavaScript: window.history.back();" class="bottao">

@endsection

