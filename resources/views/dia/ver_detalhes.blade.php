@extends('layouts.app')
@section('titulo',"Bem vindo")

<div class="min-height-big">
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
    <div class="accordion " id="accordionExample">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-link  text-success p-0" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Criar um Estudo 
                    </button>
                </h2>
            </div>
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
                    <div class="w-100">
                        <span>Conteudo estudado</span>
                        <!-- summernote -->
                        <textarea id="summernote" 
                                  class="form-control"
                                  type="id"
                                  name="conteudo" 
                                  rows=8>
                        </textarea>
                    </div>
                    <div class="text-right">
                        <input type="submit" value="Criar" class="btn btn-outline-primary my-2 col-12 col-lg-2">

                        <!-- <input type="cancel" value="Cancelar" class="btn btn-secondary col-12 my-2 col-lg-1"> -->

                    </div>
                </form>
        </div>
        </div>
    </div>
    <!-- FIM criar um item de estudo -->




    <div class="mt-3">
        <h6>Estudos:</h6>

        <ul>
            @foreach($estudos as $item_estudo)
                <li class="mt-3">
                    <h6>
                        {{$item_estudo->titulo}}
                    </h6>
                    <div id="item_{{$item_estudo->id}}" style="width:100%;max-width:480px">
                        
                        
                    </div>
                    <script>
                        let item{{$item_estudo->id}} = $('#item_{{ $item_estudo->id }}');
                        
                        item{{$item_estudo->id}}.append( `
                            @php
                             echo Illuminate\Support\Str::limit( $item_estudo->conteudo ,150 )
                            @endphp
                          `);
                        
                    </script>
                    <a href="/estudo/{{$item_estudo->id}}/deletar" class="btn btn-outline-danger mt-3">
                        Deletar
                    </a>
                    <a href="/estudo/{{$item_estudo->id}}/atualizar" class="btn btn-outline-primary mt-3">
                        Atualizar
                    </a>
                    <a href="/estudo/{{$item_estudo->id}}/verUm" class="btn btn-outline-success mt-3">
                        Ver Item
                    </a>
                    
                </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection


@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js"></script>

<script>

    $(document).ready(function() {
        $('#summernote').summernote({
            height:200
        });
    });
    
</script>

@endsection