@extends('layouts.app_full')
@section('titulo',"Bem vindo")
@section("content")
<div class="w-100 p-0 imagemBemvindo min-height">
    <div class="img">

    </div>
    <div class="gradient">

    </div>
    <h2 class="mt-4">
        Seja bem vindo ao diario de estudos
    </h2>
</div>
<div class="container mt-3  ">
    <h3> Aplicação de Diário de estudos </h3>
    <p>
        Diário de estudos é um aplicativo para que permite a organização dos estudos,     </p>
    <p>
        Cada submitem estudo contem o nome do estudo e o texto de estudo, assim é possivel agrupar estudos.
    </p>
    <div class="row justify-content-center" >
        <div class="col-12 col-md-8 col-lg-7 ">
            <img class="mx-auto"
                src="./imagens/engenharia_basica.png" 
                alt=""
            >
        </div>
        <div class="col-12 col-md-8 col-lg-7 ">
            <img class="mx-auto"
                src="./imagens/engenharia_2.png" 
                alt=""
            >
        </div>               
        
     </div>
     <section>
        <h2>
             Tecnologías utilizadas:
         </h2>
         <div class="row">
            <ul>
                <li>
                     <img src="./imagens/laraicon.png" alt="" style="width:32px">
                    Laravel
                </li>
                <li> 
                    <i class="material-icons md-8">line_style</i>
                    Visual Studio Code
                </li>
                <li>
                     <i class="material-icons md-8">extension</i> PHP
                </li>
                <li>
                     <img src="./imagens/data_icon.svg" alt="" style="width:32px">
                    Sqlite
                </li>
            </ul>
        </div>
     </section>
     
</div>
@endsection