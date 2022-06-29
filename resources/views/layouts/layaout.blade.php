<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina principal - @yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link href="css/pokedex.css" rel="stylesheet" />
    <script src="js/dex.js" type="text/javascript" defer></script>
</head>
<body>


    <!-- agrega aquí el header con el logo -->
<!-- Logo -->
<nav class="navbar navbar-light bg-main">
    <div class="container p-4">
        <a class="navbar-brand m-auto" href="#">
            <img src="{{asset('images/lpoke.png')}}" width="120" alt="" loading="lazy">


        </a>

    </div>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('home') }}">Volver</a>
            </div>

        </div>

    </div>
</nav>


<!-- Contenido -->
@yield('contenido') ->@section('contenido')

@endsection

<!-- Footer -->
<footer class="container-fluid bg-main">
    <div class="row text-center p-4">
        <div class="mb-3">
            <img src="{{asset('images/lpoke.png')}}" alt="Wikimon" width="120" id="logofooter">
        </div>
        <div id="col-md-10">
            <a href="#">
                <img src="{{asset('images/facebook.png')}}" class="img-fluid" width="40px" alt="facebook wiki">
            </a>
            <a href="#">
                <img src="{{asset('images/instagram.png')}}" class="img-fluid" width="40px" alt="instagram wiki">
            </a>
            <a href="#">
                <img src="{{asset('images/youtube.png')}}" class="img-fluid" width="40px" alt="youtube wiki">
            </a>
            <p class="mt-3">Copyright © 2022 Wikimon, Wiki. <br> Todos los derechos reservados.</p>
        </div>
    </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>
