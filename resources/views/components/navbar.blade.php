<nav class="navbar navbar-expand-lg container-navbar ">
    <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="{{route('homepage')}}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('contacts')}}">contattaci</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('product.index')}}">prodotti</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Altro
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('article.author' ,'Miyazaki')}}">Miyazaki</a></li>
                        <li><a class="dropdown-item" href="#">goku</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{route('article.create')}}">Crea Articolo</a></li>
                        <li><a class="dropdown-item" href="{{route('product.create')}}">Crea Prodotto</a></li>
                    </ul>
                </li>

            </ul>
            @auth
            <li class="nav-item">
                <a class="nav-link">Ciao {{Auth::user()->name}}</a>
            </li>
            <li>
                <a href="{{route('logout')}}" class="nav-link" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
            </li>
            <form id="logout-form" action="{{route('logout')}}" method="POST" class="d-none">
                @csrf
            </form>

            @else
            <li class="nav-item">
                <a class="nav-link" href="{{route('register')}}">Registrati</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('login')}}">Login</a>
            </li>
            @endauth
        </div>
    </div>
</nav>
