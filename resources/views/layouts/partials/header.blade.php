<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Manga-K</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('index') }}">Manga-K</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav">
                <li class=""><a href="{{ route('index') }}">Les mangas</a></li>
            </ul>


            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @guest
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @endguest
            </ul>

            @if(Route::current()->getName() == 'SwP' or Route::current()->getName() == 'mangas.show')
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Chapitres <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            @foreach ($mangaTomes as $mangaT)
                                <li><a href="{!! route('SwP', ['id'=> $id, 'pages'=> 0, 'chapter'=> $mangaT->chapter])  !!}">{{ $mangaT->chapter }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            
                <select onchange="window.open(this.options[this.selectedIndex].value,'_top')" class="nav navbar-nav navbar-right SelectPage">
                    @for($i = 0; $i < $manga->tomeCurrent->nbPages; $i++ )
                        <option {{ $i == $manga->pageCurrent ? 'selected' : '' }} href="{!! route('SwP', ['id'=> $id, 'pages'=> $i, 'chapter'=> $manga->tomeCurrent->chapter])  !!}">
                            {{ $i }}
                        </option>
                    @endfor
                </select>
            @endif

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>