@extends('layouts.app')
@section('titulo',"Bem vindo")
@section("content")

<div class="mt-4">
    <a href="/dia/{{$estudo->dias_id}}" >Voltar</a>
</div>

<form  method="post" action="/estudo/{{$estudo->id}}/atualizar"> 
 @csrf
    <!-- campos ocultos -->
    <input type="hidden" name="dia_id" value="{{$estudo->dias_id}}">
    <input type="hidden" name="id" value="{{$estudo->id}}">
    <!-- titulo -->
    <div class="form-group col-12 col-md-6 col-xl-4 px-lg-0">
        <span>Titulo</span>
        <input class="form-control" type="text" name="titulo" value="{{$estudo->titulo}}">
    
    </div>
    <!-- detalhes ou conteúdo estudado -->
    <div class="form-group col-12 col-md-8 col-xl-6 px-lg-0">
        <span>Conteudo estudado</span>
        <textarea class="form-control" type="id"  name="conteudo" rows=8>{{$estudo->conteudo}}</textarea>
    </div>
    <!-- controles? -->
    <div>
        <a href="/dia/{{$estudo->dias_id}}" class="btn btn-secondary my-2">Cancelar</a>
        <input type="submit" value="Atualizar" class="btn btn-primary my-2">
    </div>
</form>
@endsection