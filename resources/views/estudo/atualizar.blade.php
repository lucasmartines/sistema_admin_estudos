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
        <input class="form-control" type="text" name="titulo" 
            value="@if(empty(old('titulo'))) {{$estudo->titulo}}
                    @else
                    {{ old('titulo') }}
                    @endif ">
    
    </div>
    <!-- detalhes ou conteúdo estudado -->
    <div class="form-group col-12 col-md-12 col-xl-10 px-lg-0">
        <span>Conteudo estudado</span>
        <textarea 
                id="summernote"
                class="form-control" 
                type="id" 
                name="conteudo"
                rows=16
        
            >@if(empty( old('conteudo') )){{$estudo->conteudo}}
            @else{{ old('conteudo') }}@endif   
        </textarea>
    </div>
    <!-- controles? -->
    <div>
        <a href="/dia/{{$estudo->dias_id}}" class="btn btn-secondary my-2">Cancelar</a>
        <input type="submit" value="Atualizar" class="btn btn-primary my-2">
    </div>
</form>


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