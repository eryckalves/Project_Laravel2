<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>BlasterMaster</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>


<!-- Styles -->
<style>
.marcador{
    background-color: #f8f9fa;
    border-radius:5px
}
</style>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand d-flex" href="{{ url('/') }}">
            <div><img src="/imagens/Logodefault.jpg" style="height:22px; border-right:1px solid #333333;" class="pr-3 pt-1"></div>
            <div class="pl-3 h4">BlasterMaster</div>
        </a>  
        <div class="collapse navbar-collapse pl-5 h4" id="navbarNav">
            <ul class="navbar-nav">
                <li class="{{Request::is('/') ? 'active' : null }} {{Request::is('/') ? 'marcador' : null }}">
                    <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(Página atual)</span></a>
                </li>
                <li class="{{Request::is('sobre') ? 'active' : null }} {{Request::is('sobre') ? 'marcador' : null }}">
                    <a class="nav-link" href="{{url('/sobre')}}">Sobre</a>
                </li>
                <li class="{{Request::is('galeria') ? 'active' : null }} {{Request::is('galeria') ? 'marcador' : null }}">
                    <a class="nav-link" href="{{url('/galeria')}}">Galeria</a>
                </li>
                <li class="{{Request::is('contato') ? 'active' : null }} {{Request::is('contato') ? 'marcador' : null }}">
                    <a class="nav-link" href="/contato">Contato</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Links
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="https://www.facebook.com/">Facebook</a>
                        <a class="dropdown-item" href="https://www.instagram.com/?hl=pt-br">Instagram</a>
                        <a class="dropdown-item" href="#">Qualquer Outro Link</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<main class="py-4">
    @yield('content')
</main>   
</body>