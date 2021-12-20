<!DOCTYPE html>
<head>

    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">NEWS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Togglenavigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            @if($url === '/')
                <li class="nav-item" style="background-color: #ffffff"><a class="nav-link " href="{{route('home')}}">Home</a></li>
            @else
                <li class="nav-item"><a class="nav-link " href="{{route('home')}}">Home</a></li>
            @endif

            @if(str_starts_with($url, 'article'))
                <li class="nav-item" style="background-color: #ffffff"><a class="nav-link " href="{{route('articles')}}">Articles</a></li>
                @else
                    <li class="nav-item"><a class="nav-link " href="{{route('articles')}}">Articles</a></li>
                @endif
        </ul>
    </div>
</nav>


    @yield('content')

<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('jquery-3.5.1.slim.min.js') }}"></script>

</body>
</html>
