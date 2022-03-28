<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container px-5">
        <img src="{{asset('components\img\logo.png')}}" width="40" alt="">
        <a class="navbar-brand" href="index.html">{{ValueToDescription('HM01')}}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="/"><strong>Inicio</strong></a></li>
                <li class="nav-item"><a class="nav-link" href="/nosotros"><strong>Nosotros</strong></a></li>
                <li class="nav-item"><a class="nav-link" href="/contacto"><strong>Contacto</strong></a></li>
                <li class="nav-item"><a class="nav-link" href="/productos"><strong>Productos</strong></a></li>
                @if (Auth::user())
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownLogin" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{Auth::user()->name}}</a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownLogin">
                        <li><a class="dropdown-item" href="blog-home.html">Administrar Pagina</a></li>
                        <li><a class="dropdown-item" href="blog-post.html">Cerrar sesion</a></li>
                    </ul>
                </li>
                @else
                <li class="nav-item"><a class="nav-link" href="/login"><strong>Ingresar</strong></a></li>
                @endif
            </ul>
        </div
    </div>
</nav>
