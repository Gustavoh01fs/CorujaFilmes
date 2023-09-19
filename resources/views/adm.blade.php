@extends('layouts.main')

@section('title', 'Reservas')

@section('content')


    @if($id == 'adm')
    <p> Ola {{$id}} </p>
    @else
    <p>Voce não tem id</p>
    @endif

@endsection