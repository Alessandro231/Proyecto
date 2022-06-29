<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">





        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            html, body {
                background-color: rgb(169, 40, 48);
                color: #030303;
                font-family: 'Nunito', sans-serif;
                font-weight: 150;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 70vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 0px;
                top: 18px;
            }

            .content {
                text-align: center;

            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #0e0f10;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 60px;
            }
            .card-body{
                background-color: #030303;
            }
            .card-txt-category{
                text-decoration-color: #efe5e5
            }
            h2 {color:rgb(24, 23, 23);
                font-size:20px;
                font-family: 'Nunito', sans-serif;
                font-weight:bold;
                font-style:italic;
                line-height:30px;
                letter-spacing:5px;
                text-decoration:transparent;
                text-transform:capitalize;
                text-align:center;
                text-indent:30px;

                border-width:2px;
                border-color:rgb(9, 9, 10);
                border-style:solid;
            }
        </style>
    </head>
    <body>
        <title>Wikimon</title>
                @if (Route::has('login'))
                <div class="top-right links">

                    <a class="navbar-brand m-auto" href="#">

                        <img src="{{asset('images/lpoke.png')}}" width="100" alt="" loading="lazy" >

                    </a>
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif



            <div class="content">
                <div class="title m-b-md">
                    Wikimon
                </div>



                <!-- Logo -->




                <div class="links">
                    <img src="{{asset('images/ll.jpeg')}}" width="50" height="50" alt="">
                    <a href="https://laravel.com/docs">Docs</a>
                    <img src="{{asset('images/lc.jpg')}}" width="50" height="50" alt="">
                    <a href="https://laracasts.com">Laracasts</a>
                    <img src="{{asset('images/lns.png')}}" width="50" height="50" alt="">
                    <a href="https://laravel-news.com">News</a>
                    <img src="{{asset('images/lb.png')}}" width="50" height="50" alt="">
                    <a href="https://blog.laravel.com">Blog</a>
                    <img src="{{asset('images/ln.png')}}" width="50" height="50" alt="">
                    <a href="https://nova.laravel.com">Nova</a>
                    <img src="{{asset('images/lf.png')}}" width="50" height="50" alt="">
                    <a href="https://forge.laravel.com">Forge</a>
                    <img src="{{asset('images/lv.png')}}" width="50" height="50" alt="">
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <img src="{{asset('images/gh.png')}}" width="50" height="50" alt="">
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>

         <!-- Contenido -->
    <section class="container-fluid content">
        <!-- Categorías -->
        <div class="row justify-content-center">
            <div class="col-10 col-md-12">
                <nav class="text-center my-5">
                    <a href="#" class="mx-3 pb-3 link-category d-block d-md-inline selected-category" >Arma ya tu propio equipo!</a>
                    <a href="#" class="mx-3 pb-3 link-category d-block d-md-inline" >Se un entrenador!</a>
                    <a href="#" class="mx-3 pb-3 link-category d-block d-md-inline" >Preguntas frecuentes</a>
                </nav>
            </div>
        </div>

        <!-- Posts -->
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row">
                    <!-- Post 1 -->
                    <div class="col-md-4 col-12 justify-content-center mb-5">
                        <div class="card m-auto" style="width: 18rem;">
                            <h2 for="">Aqui podras ver combates de pokemon legendarios!!!</h2>
                            <video height="240" src="{{asset('videos/pl.mp4')}}" alt="Post combat" autoplay muted controls></video>
                        </div>
                    </div>
                    <!-- Post 2 -->
                    <div class="col-md-4 col-12 justify-content-center mb-5">
                        <div class="card m-auto" style="width: 18rem;">
                            <h2 for="">Viajes maestros pokemon serie!!!</h2>
                            <video height="240" src="{{asset('videos/vm.mp4')}}" alt="Post serie" autoplay muted controls></video>
                        </div>
                    </div>

                    <!-- Post 3 -->
                    <div class="col-md-4 col-12 justify-content-center mb-5">
                        <div class="card m-auto" style="width: 18rem;">
                            <h2 for="">No te pierdas este grandioso juego de pokemon!!!</h2>
                            <video height="240" src="{{asset('videos/pu.mp4')}}" alt="Post game" autoplay muted controls></video>
                        </div>
                    </div>
                </div>
            </div>

        <!-- Footer -->
    <footer class="container-fluid bg-main">
        <div class="row text-center p-4">
            <div class="mb-3">
                <img src="{{asset('images/lpoke.png')}}" alt="Wikimon" width="120" id="logofooter">
            </div>
            <div id="col-md-10">
                <a href="#">
                    <img src="{{asset('images/facebook.png')}}" class="img-fluid" width="40px" alt="facebook wikimon">
                </a>
                <a href="#">
                    <img src="{{asset('images/instagram.png')}}" class="img-fluid" width="40px" alt="instagram wikimon">
                </a>
                <a href="#">
                    <img src="{{asset('images/youtube.png')}}" class="img-fluid" width="40px" alt="youtube wikimon">
                </a>
                <p class="mt-3">Copyright © 2022 | Wikimon, Wiki. <br> Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    </body>
</html>
