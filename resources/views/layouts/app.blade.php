<html lang="en">
<head>
    @include('layouts._header')
</head>
<body>
    @include('layouts._nav')

    <div class="container">
        @yield("content")
    </div>
    
    @include('layouts._footer')

</body>
</html>