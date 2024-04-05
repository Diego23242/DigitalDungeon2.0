<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('Css/index.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="icon" href="{{ asset('Img/DigitalDungeon.ico') }}" type="image/x-icon">
    @yield('titulo1')
</head>
<style>
    /* Estilo personalizado para el contorno con movimiento */
    .card-border {
        border: 5px solid;
        border-image-slice: 1;
        animation: borderAnimation 5s infinite alternate linear;
    }
    /* Definición de la animación */
    @keyframes borderAnimation {
        0% { border-color: rgb(255, 0, 0); }
        25% { border-color: rgb(0, 255, 0); }
        50% { border-color: rgb(98, 0, 255); }
        75% { border-color: rgb(255, 255, 0); }
        100% { border-color: rgb(255, 0, 255); }
    }
    .card-img-top{
        border: 5px;
    }
    .card {
        height: 700px; /* Altura fija para todas las tarjetas */
    }
    .card-body{
        background-color: rgb(235, 235, 235);
    }
</style>
<body style="background-color: #ffffff; color: white;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">DigitalDungeon</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active"><a class="nav-link" href="{{ route('inicio') }}">Inicio</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categorias
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('accion') }}">Acción</a>
                        <a class="dropdown-item" href="{{ route('aventura') }}">Aventura</a>
                        <a class="dropdown-item" href="{{ route('retro') }}">Retro</a>
                        <a class="dropdown-item" href="{{ route('plataformas') }}">Plataformas</a>
                        <a class="dropdown-item" href="{{ route('terror') }}">Terror</a>
                        <a class="dropdown-item" href="{{ route('estrategia') }}">Estrategia</a>
                        <a class="dropdown-item" href="{{ route('simulacion') }}">Simulación</a>
                        <a class="dropdown-item" href="{{ route('carros') }}">Carros</a>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="ofertas.html">Ofertas</a></li>
                <li class="nav-item search-bar">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Plataformas
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="Xbox.html">Xbox</a>
                            <a class="dropdown-item" href="playstation.html">PlayStation</a>
                        </div>
                    </li>
                    <li class="nav-item search-bar">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Accesorios
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="mandos.html">Mandos</a>
                                <a class="dropdown-item" href="audifonos.html">Audifonos</a>
                            </div>
                        </li>
                    <form class="form-inline" action="#" method="get">
                        <input class="form-control mr-sm-2" type="text" name="search" placeholder="Buscar...">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                    </form>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Cuenta
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('login') }}">Iniciar Sesion</a>
                        <a class="dropdown-item" href="{{ route('registros') }}">Registrarse</a>
                        <a class="dropdown-item" href="{{ route('comentarios') }}">Comentario</a>
                        <a class="dropdown-item" href="ediccion_eliminacion_usuario.html">Administrador</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <br>
    <!-- Fin de la barra de naveg-->
    @yield('seccion')
    
    <footer class="bg-primary text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5 class="mb-4">Enlaces rápidos</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Inicio</a></li>
                        <li><a href="#" class="text-white">Juegos</a></li>
                        <li><a href="comentario.html" class="text-white">Contacto</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5 class="mb-4">Redes Sociales</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white"><i class="fab fa-facebook-f"></i> Facebook</a></li>
                        <li><a href="#" class="text-white"><i class="fab fa-twitter"></i> Twitter</a></li>
                        <li><a href="#" class="text-white"><i class="fab fa-instagram"></i> Instagram</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5 class="mb-4">Contacto</h5>
                    <p class="mb-1"><i class="fas fa-envelope"></i> Email: info@juegosecommerce.com</p>
                    <p class="mb-1"><i class="fas fa-phone"></i> Teléfono: +1234567890</p>
                </div>
            </div>
            <hr class="my-4 bg-light">
            <p class="mb-0 text-center text-white">© 2024 Juegos E-commerce. Todos los derechos reservados.</p>
        </div>
    </footer>

    <!-- Include Bootstrap JS libraries -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
