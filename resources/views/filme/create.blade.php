@extends('layouts.main')

@section('title', 'Cadastrar Filme')
@section('menu')
@section('content')


<div id="filme-create-container" class="col-md-6 col-lg-6 col-sm-6 offset md-3 lg-3 sm-3">
    <h1> Adicione um filme</h1>
    <form action="/filme" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Filme:</label>
            <input type="text" class="form-control" id="nfilme" name="nfilme" placeholder="Nome do Filme">
        </div>

        <div class="form-group">
            <label for="title">URL:</label>
            <input type="text" class="form-control" id="ufilme" name="ufilme" placeholder="URL do Filme">
        </div>

        <div class="form-group">
            <label for="title">Escolha uma opção de envio:</label>
            <select name="ofilme" id="ofilme" class="form-control">
                <option value="0">Já em Stream</option>
                <option value="1">Em breve</option>
            </select>
        </div>

        <div class="form-group">
            <label for="capa">Capa:</label>
            <input name="cap"  type="file">
        </div>
        <input type="submit" class="bottao" value="Adicionar Filme">
    </form>
</div>

@endsection
