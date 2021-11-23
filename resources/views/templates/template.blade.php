<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" type="text/css">
    <script  href="{{ asset('js/app.js') }}"></script>
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    {{-- icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    {{-- vue --}}
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
  </head>
  <body>
    
    <div class="d-flex flex-wrap align-items-center justify-content-between nav">
        <div class="d-flex">
            <a href="{{ route('site.index') }}" class="d-flex align-items-center mb-2 mb-lg-0 text-decoration-none">
                <div class="btn link-light home">
                    Home
                </div>
            </a>

            {{-- <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-decoration-none">
                <button class="btn icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-grid-1x2" viewBox="0 0 16 16">
                        <path d="M6 1H1v14h5V1zm9 0h-5v5h5V1zm0 9v5h-5v-5h5zM0 1a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm9 0a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1V1zm1 8a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1h-5z"></path>
                    </svg>
                    
                </button>
            </a> --}}
        </div>

        <div class="img">
            <img src="{{ asset('images/KanNotes (1).png') }}" alt="" class="logo">
        </div>
        <div class="dropdown text-end">
            @if (session('email'))
                <div href="#" class="d-block link-light text-decoration-none dropdown-toggle " id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    Olá, {{ session('email.name') }}
                </div>
                
                    <img src="{{ asset('images/eu.jpg') }}" alt="" class="pic-img">
             
            @endif
            <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1" style="">
                <li><a class="dropdown-item" href="{{ route('profile.index') }}">Perfil</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="{{ route('logout') }}" style="color:#b54c4c"> Sair </a></li>
            </ul>
        </div>
    </div>

    @yield('content')


    

</body>
</html>