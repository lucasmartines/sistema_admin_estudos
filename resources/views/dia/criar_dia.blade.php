@extends('layouts.app')
@section('titulo',"Dias de estudo")

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


    <form  method="post" class="mt-3 min-height" action="/dia/criar"> 
        <a href="/dia"
            class="  " >Voltar</a>
    @csrf

    <input type="hidden" name="dia_id" >
        <div class="form-group mt-3 col-12 col-lg-6 col-xl-4  ">
            <h2>Criar Dia de Estudo</h2>
            <span> Titulo </span>
            <input class="form-control " type="text" name="titulo">
            <div class="text-right">

                <a href="/dia" class="btn btn-outline-secondary my-2">Cancelar</a>
                <input type="submit" value="Criar" class="btn btn-outline-primary my-2 px-4">
            </div>
        </div>
    </form>
    @endsection
