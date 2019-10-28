@extends('layouts.app')
@section('titulo',"Bem vindo")
@section("content")

 
<a  
    href="#"
    id="voltar"
    class="mt-3">Voltar</a>
<h2 class="pt-4">
    Estudo
</h2>
<div 
    class="min-height pt-3"
    id="mostrar_item"  
    style="width:100%;max-width:480px">
                        
                        
</div>


@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js"></script>

<script>

    $(document).ready(function() {
        $('#summernote').summernote();
    });

    let item = $('#mostrar_item');
    
    item.append( `
        @php
            echo $item_estudo->conteudo
        @endphp
    `);
    
    $('#voltar').click(function(e){
        e.preventDefault();
        window.history.back(-1);
    });
 

</script>

@endsection