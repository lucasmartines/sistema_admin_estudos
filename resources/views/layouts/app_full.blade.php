<html lang="en">
<head>
    @include('layouts._header')
</head>
<body>

    @include('layouts._nav')

    <div class="d-flex w-100 flex-column">
        @yield("content")
    </div>

    @include('layouts._footer')
</body>
</html>