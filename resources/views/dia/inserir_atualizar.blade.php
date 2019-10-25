@extends('layouts.app')
@section('titulo',"Bem vindo")
@section("content")

@if( !empty( session('status') ) )
<div class="alert alert-success my-3">
    {{session('status')}}
</div>
@endif

@foreach($errors->all() as $error)
<div class="alert alert-danger my-3">
    {{$error}}
</div>
@endforeach

<h4 class="mt-4">
    Modificar dia: 
</h4>
<div>
    <a href="/dia/{{$dia->id}}">Voltar</a>
</div>
<form  method="post" class="mt-3" action="/dia/{{$dia->id}}/atualizar"> 
 
    @csrf
    
    <input type="hidden" name="id" value="{{ $dia->id }}">
        <div class="form-group mt-3 col-12 col-lg-6 col-xl-4">
            <span>Titulo</span>
            <input class="form-control" type="text" name="titulo" value="{{ $dia->titulo}}">
            <div class="text-right">
                <input type="submit" value="Atualizar" class="btn btn-primary my-2 px-4">
            </div>

        </div>
        
   
        
      
 
    </form>
@endsection