@extends('layouts.app')
@section('titulo',"Bem vindo")
@section("content")

<div class="mt-3 d-flex">
    <a href="/dia"
        class="mr-auto">
        Voltar 
    </a>
    <a href="/dia/{{$dia->id}}/atualizar"
        class="btn btn-outline-info">Modificar
    </a>
</div>

<h1 >
    {{$dia->titulo}}
</h1>

<p>
    Data: {{$dia->created_at}}
</p>
<!-- criar um item de estudo -->
<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link  text-success p-0" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
             
                Criar um Estudo 
             
        </button>
      </h2>
    </div>
    <div id="collapseOne" class="collapse  " aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
      <form  method="post" action="/estudo"> 
      
            @csrf
            <input type="hidden" name="dia_id" value="{{$dia->id}}">
                <div class="form-group">
                    <span>Titulo</span>
                    <input class="form-control" type="text" name="titulo">
                
                </div>
                <div class="form-group">
                    <span>Conteudo estudado</span>
                    <textarea class="form-control" type="id"  name="conteudo" rows=8></textarea>
                </div>
                <div class="text-right">
                    <input type="submit" value="Criar" class="btn btn-primary my-2 col-12 col-lg-2">

                    <!-- <input type="cancel" value="Cancelar" class="btn btn-secondary col-12 my-2 col-lg-1"> -->

                </div>
            </form>
      </div>
    </div>
</div>
<div class="mt-3">
    <h6>Estudos:</h6>

    <ul>
         @foreach($estudos as $item_estudo)
            <li class="mt-3">
                <h6>
                    {{$item_estudo->titulo}}
                </h6>
                <p>
                    {{$item_estudo->conteudo}}
                </p>
                <a href="/estudo/{{$item_estudo->id}}/deletar" class="text-danger">
                    Deletar
                </a>
                <a href="/estudo/{{$item_estudo->id}}/atualizar" class="text-info">
                    Atualizar
                </a>
            </li>
        @endforeach
    </ul>
</div>
@endsection