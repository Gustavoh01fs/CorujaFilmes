<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <!-- CSS -->
        <link rel="stylesheet" href="/css/styles.css">

        <!-- JavaScript -->
        <script src="/js/scripts.js"></script>
    </head>
        @yield('bgtopo')
        <div class="bgtopo">   
        </div>

        @yield('menu')
        <div id="menum">
        <a href="/" class="menu">Página Inicial</a>
        <a href="/sessao" class="menu">Próximos Lançamentos</a>
        <a href="/filme/create" class="menu">Cadastro</a>
        </div>

    <main>
        <div class="container-fluid">
            <div class="row">
                @if(session('msg'))
                <p class="msg">{{session ('msg')}}</p>
                @endif
                @yield('content')
            </div>
        </div>
    </main>
        
    <body>

<!--<input type="button" value="Voltar" onClick="JavaScript: window.history.back();" class="bottao"> -->

    </body>
    <footer>
        <p> CorujaFilmes &copy; 2023</p>
    </footer>

    
</html>