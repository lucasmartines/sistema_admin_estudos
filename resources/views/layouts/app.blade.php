<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

</head>
<body>

    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <a href="/" class="navbar-brand">Brand</a>
        <button class="navbar-toggler" 
                type="button" 
                data-toggle="collapse" 
                data-target="#conteudoNavbarSuportado" 
                aria-controls="conteudoNavbarSuportado" 
                aria-expanded="false" 
                aria-label="Alterna navegação">

            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="conteudoNavbarSuportado"
             class="collapse navbar-collapse">
            
             <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="/dia" class="nav-link">
                        Dias
                    </a>
                </li>
             <ul>
            
        </div>
    </nav>
    <div class="container">
        @yield("content")
    </div>

    <script src="{!! asset('js/jquery-3.4.1.min.js') !!}"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>