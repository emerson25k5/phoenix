<html>
    <head>
        <link href="/../css/app.css" rel="stylesheet">
        <link href="/../css/custom.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        <title>Controle de estoque</title>
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="/produtos">Estoque laravel</a>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{route('produtos')}}">Listagem</a></li>
                        <li><a href="{{route('novo')}}">Novo</a></li>
                    </ul>
                </div>
            </nav>

        @yield('conteudo')

        <footer class="footer">
            <p>© Emersoroni</p>
        </footer>

        </div>
    </body>
</html>