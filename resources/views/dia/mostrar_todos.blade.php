@extends('layouts.app')
@section('titulo',"Bem vindo")
@section("content")
<!-- controles -->
<div class="mt-3  d-flex">
    <h4 class="pt-2 mr-auto" >
        Dias de estudo
    </h4>
     <a href="/dia/criar" 
        class="text-info ">
        Criar um Dia
    </a>
</div> 
<!-- painel -->
<div class="row">
    <!-- left panel -->
    <ul class="mt-3 col-12 col-lg-7  order-2 order-md-1" >
    @foreach($dias as $dia)
        <li class="mt-1 mb-3" >
            <h2> {{$dia->titulo}} </h2>
            <p> data:  {{$dia->created_at}}</p>

            <a href="/dia/{{$dia->id}}">
                Ver Detalhes dos Estudos
            </a>

            <a  
                href="/dia/{{$dia->id}}/deletar"
                value="deletar"
                class="text-danger">
                Deletar
            </a>               
        </li>
    @endforeach
    @if( empty($dias) )
        <p>Nenhum dia </p>
    @endif
    </ul>
    <div class="col-lg-5 col-12 order-1 order-md-2">
        <div class="d-flex align-items-center justify-content-center">
            <img src="{{asset('imagens/crianca_estudando.webp')}}" alt="">
        </div>
    </div>
</div>
<!-- paginação -->
<div class="text-center">
{{ $dias->links() }}
</div>
@endsection