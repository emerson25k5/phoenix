<html>
    <head>
        <link href="/../css/app.css" rel="stylesheet">
        <link href="/../css/custom.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        <title>Controle de estoque</title>
        <script>$('.dropdown-toggle').dropdown()</script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="{{route('home')}}">Estoque laravel</a>
                    </div>
                    @if (isset(Auth::user()->name))
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{route('produtos')}}">Listagem</a></li>
                        <li><a href="{{route('novo')}}">Novo</a></li>                        
                        <li id="navbarDropdown" class="dropdown nav-link" data-troggle="dropdown" data-bs-toggle="dropdown">
                            <a href="#" role="button" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                        </li>
                        <ul class="dropdown-menu">
                                <li href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                </li>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                </form>
                        </ul>
                    </ul>
                @endif
                </div>
            </nav>

        @yield('conteudo')

        <footer class="footer">
        <script>
            $(document).ready(function(){
                $('.dropdown-toggle').dropdown();
            });
        </script>
            <p>© Emersoroni</p>
        </footer>

        </div>
    </body>
</html>