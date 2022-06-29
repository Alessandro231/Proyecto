@extends('layouts.layaout')

@section('contenido')

@section('title','Wikimon')

<!-- Contenido -->
<section class="container-fluid content py-5">
    <div class="row justify-content-center">
        <!-- Post -->
        <div class="col-12 col-md-7 text-center">
            <h1>Bienvenidos a la wiki entrenadores!!!</h1>
            <hr>
            <img src="images/inicio.jpg" alt="Post Javascript" class="img-fluid">

            <p class="text-left mt-3 post-txt">
                <span>Autor: Ash</span>
                <span class="float-right">Publicado: Hace 4 semanas</span>
            </p>
            <p class="text-left">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Eaque nemo accusantium libero hic repellat corporis assumenda
                debitis adipisci modi expedita inventore vel excepturi,
                facere animi accusamus? Voluptatem ab ad harum?
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Eaque nemo accusantium libero hic repellat corporis assumenda
                debitis adipisci modi expedita inventore vel excepturi,
                facere animi accusamus? Voluptatem ab ad harum?
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Eaque nemo accusantium libero hic repellat corporis assumenda
                debitis adipisci modi expedita inventore vel excepturi,
                facere animi accusamus? Voluptatem ab ad harum?
            </p>
            <p class="text-left post-txt"><i>Categoría: Entrenadores pokemon</i></p>
        </div>


        <!-- Entradas recientes -->
        <div class="col-md-3 offset-md-1">
            <p>Últimas entradas</p>
            <div class="row mb-4">
                <div class="col-4 p-0">
                    <a href="#">
                        <img src="images/rubi.jpg" class="img-fluid rounded" width="100" alt="">
                    </a>
                </div>
                <div class="col-7 pl-0">
                    <a href="#" class="link-post">Todo sobre el pokemon rubi</a>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-4 p-0">
                    <a href="#">
                        <img src="images/zafi.jpg" class="img-fluid rounded" width="100" alt="">
                    </a>
                </div>
                <div class="col-7 pl-0">
                    <a href="#" class="link-post">Todo sobre el pokemon zafiro</a>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-4 p-0">
                    <a href="#">
                        <img src="images/esme.jpg" class="img-fluid rounded" width="100" alt="">
                    </a>
                </div>
                <div class="col-7 pl-0">
                    <a href="#" class="link-post">Todo sobre el pokemon esmeralda</a>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-4 p-0">
                    <a href="#">
                        <img src="images/ep.jpg" class="img-fluid rounded" width="100" alt="">
                    </a>
                </div>
                <div class="col-7 pl-0">
                    <a href="#" class="link-post">Crea tu propio equipo pokemon!!!</a>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-4 p-0">
                    <a href="#">
                        <img src="images/pdex.jpg" class="img-fluid rounded" width="100" alt="">
                    </a>
                </div>
                <div class="col-7 pl-0">
                    <a href="#" class="link-post">Todo lo que necesitas saber sobre la Pokedex</a>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-4 p-0">
                    <a href="#">
                        <img src="images/tvp.jpg" class="img-fluid rounded" width="100" alt="">
                    </a>
                </div>
                <div class="col-7 pl-0">
                    <a href="#" class="link-post">Tv. Pokemon</a>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-4 p-0">
                    <a href="#">
                        <img src="images/jcp.png" class="img-fluid rounded" width="100" alt="">
                    </a>
                </div>
                <div class="col-7 pl-0">
                    <a href="#" class="link-post">Entra ya a nuestro juego de cartas pokemon!!!</a>
                </div>
            </div>

        </div>

    </div>
</section>
<div class="row justify-content-center">
    <!-- Post -->
    <div class="col-12 col-md-7 text-center">
        <h1>Obten la informacion del pokemon que desees!!!</h1>
        <hr>
        <img src="images/dex.jpg" alt="Post Javascript" class="img-fluid">

        <form action="" onsubmit="searchPokemon(event)">
            <input type="text" name="pokemon" autocomplete="off">
        </form>
        <div data-poke-card class="poke-card">
            <div data-poke-name>Pokedex</div>
            <div data-poke-img-container class="img-container">
                <img data-poke-img class="poke-img" src="images/pshadow.png"/>
            </div>
            <img src="" alt="">
            <div data-poke-id></div>
            <div data-poke-types class="poke-types"></div>
            <div data-poke-stats class="poke-stats"></div>
        </div>
        </p>
        <p class="text-left post-txt"><i>Categoría: Api pokemon</i></p>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('pokemon.index') }}">Catalogo pokemon</a>
        </div>
    </div>
<!-- Posts relacionados -->
<section class="container-fluid content py-5">
    <div class="row justify-content-center">
        <!-- Post -->
        <div class="col-12 text-center">
            <h2>Entradas relacionadas</h2>
            <hr class="post-hr">
        </div>
        <!-- Post 1 -->
        <div class="col-md-4 col-12 justify-content-center mb-5">
            <div class="card m-auto" style="width: 18rem;">
                <img class="card-img-top" src="{{asset('images/anime.jpg')}}" alt="Post Python">
                <div class="card-body">
                    <small class="card-txt-category">Categoría: Anime</small>
                    <h5 class="card-title my-2">Ve todas las sagas de pokemon desde el inicio!!!</h5>
                    <div class="d-card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Sed voluptatum ab cumque quisquam quod nesciunt fugiat,
                        eius corrupti nulla veniam, molestias nemo repudiandae?
                    </div>
                    <a href="#" class="post-link"><b>Leer más</b></a>
                    <hr>
                    <div class="row">
                        <div class="col-6 text-left">
                            <span class="card-txt-author">Jessie</span>
                        </div>
                        <div class="col-6 text-right">
                            <span class="card-txt-date">Hace 1 semanas</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Post 2 -->
        <div class="col-md-4 col-12 justify-content-center mb-5">
            <div class="card m-auto" style="width: 18rem;">
                <img class="card-img-top" src="{{asset('images/legen.jpg')}}" alt="Post Python">
                <div class="card-body">
                    <small class="card-txt-category">Categoría: Legendarios</small>
                    <h5 class="card-title my-2">Aprende todo sobre los pokemon legendarios!!!</h5>
                    <div class="d-card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Sed voluptatum ab cumque quisquam quod nesciunt fugiat,
                        eius corrupti nulla veniam, molestias nemo repudiandae?
                    </div>
                    <a href="#" class="post-link"><b>Leer más</b></a>
                    <hr>
                    <div class="row">
                        <div class="col-6 text-left">
                            <span class="card-txt-author">Meowth</span>
                        </div>
                        <div class="col-6 text-right">
                            <span class="card-txt-date">Hace 2 semana</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Post 3 -->
        <div class="col-md-4 col-12 justify-content-center mb-5">
            <div class="card m-auto" style="width: 18rem;">
                <img class="card-img-top" src="{{asset('images/go.jpg')}}" alt="Post Python">
                <div class="card-body">
                    <small class="card-txt-category">Categoría: Pokemon go</small>
                    <h5 class="card-title my-2">Descarga ya pokemon go e inicia tu propia aventura!!!</h5>
                    <div class="d-card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Sed voluptatum ab cumque quisquam quod nesciunt fugiat,
                        eius corrupti nulla veniam, molestias nemo repudiandae?
                    </div>
                    <a href="#" class="post-link"><b>Leer más</b></a>
                    <hr>
                    <div class="row">
                        <div class="col-6 text-left">
                            <span class="card-txt-author">James</span>
                        </div>
                        <div class="col-6 text-right">
                            <span class="card-txt-date">Hace 3 semanas</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection


