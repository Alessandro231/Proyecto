@extends('layouts.style')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Todos los pokemon </h2>
            </div>
            <div class="pull-right">
                <a href="{{ route('descargarPDF') }}" class="btn  btn-primary">Imprimir PDF</a>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('def') }}"> Volver</a>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('pokemon.create') }}"> Crear un nuevo pokemon</a>
            </div>

        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Posicion</th>
            <th>Nombre</th>
            <th>Avatar</th>

        </tr>
        @foreach ($pokemon as $pokemon)
        <tr>
            <td>{{ $pokemon->id }}</td>
            <td>{{ $pokemon->nombre }}</td>
            <td>{{ $pokemon->imagen }}</td>

            <td>
                <form action="{{ route('pokemon.destroy',$pokemon->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('pokemon.show',$pokemon->id) }}">Mostrar</a>
                    <a class="btn btn-primary" href="{{ route('pokemon.edit',$pokemon->id) }}">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <table class="table table-bordered">
        <thead>
          <tr>

            <th scope="col">Nombre</th>
            <th scope="col">Avatar</th>

          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">Pikachu</th>
            <td>
                <img src="imagen/pokemon/pika.png" class="img-fluid rounded" width="100" alt="">
            </td>
            <form>
                <td>
                <a class="btn btn-info" href="#">Mostrar</a>
                <a class="btn btn-primary" href="#">Editar</a>
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </td>
          </tr>
          <tr>
            <th scope="row">Caterpie</th>
            <td>
                <img src="imagen/pokemon/cater.png" class="img-fluid rounded" width="100" alt="">
            </td>
            <form>
                <td>
                <a class="btn btn-info" href="#">Mostrar</a>
                <a class="btn btn-primary" href="#">Editar</a>

                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </td>
          </tr>
          <tr>
            <th scope="row">Venusaur</th>
            <td>
                <img src="imagen/pokemon/venu.png" class="img-fluid rounded" width="100" alt="">
            </td>
            <form>
                <td>
                <a class="btn btn-info" href="#">Mostrar</a>
                <a class="btn btn-primary" href="#">Editar</a>

                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </td>
          </tr>
          <tr>
            <th scope="row">Sandslash</th>
            <td>
                <img src="imagen/pokemon/sand.png" class="img-fluid rounded" width="100" alt="">
            </td>
            <form>
                <td>
                <a class="btn btn-info" href="#">Mostrar</a>
                <a class="btn btn-primary" href="#">Editar</a>

                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </td>
          </tr>

          <tr>
            <th scope="row">Nidoran</th>
            <td>
                <img src="imagen/pokemon/nido.png" class="img-fluid rounded" width="100" alt="">
            </td>
            <form>
                <td>
                <a class="btn btn-info" href="#">Mostrar</a>
                <a class="btn btn-primary" href="#">Editar</a>

                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </td>
          </tr>

          <tr>
            <th scope="row">Paras</th>
            <td>
                <img src="imagen/pokemon/para.png" class="img-fluid rounded" width="100" alt="">
            </td>
            <form>
                <td>
                <a class="btn btn-info" href="#">Mostrar</a>
                <a class="btn btn-primary" href="#">Editar</a>

                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </td>
          </tr>

          <tr>
            <th scope="row">Magmar</th>
            <td>
                <img src="imagen/pokemon/mag.png" class="img-fluid rounded" width="100" alt="">
            </td>
            <form>
                <td>
                <a class="btn btn-info" href="#">Mostrar</a>
                <a class="btn btn-primary" href="#">Editar</a>

                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </td>
          </tr>

          <tr>
            <th scope="row">Arbok</th>
            <td>
                <img src="imagen/pokemon/ar.png" class="img-fluid rounded" width="100" alt="">
            </td>
            <form>
                <td>
                <a class="btn btn-info" href="#">Mostrar</a>
                <a class="btn btn-primary" href="#">Editar</a>

                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </td>
          </tr>

          <tr>
            <th scope="row">Piplup</th>
            <td>
                <img src="imagen/pokemon/pip.png" class="img-fluid rounded" width="100" alt="">
            </td>
            <form>
                <td>
                <a class="btn btn-info" href="#">Mostrar</a>
                <a class="btn btn-primary" href="#">Editar</a>

                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </td>
          </tr>

          <tr>
            <th scope="row">Misdreavus</th>
            <td>
                <img src="imagen/pokemon/mis.png" class="img-fluid rounded" width="100" alt="">
            </td>
            <form>
                <td>
                <a class="btn btn-info" href="#">Mostrar</a>
                <a class="btn btn-primary" href="#">Editar</a>

                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </td>
          </tr>

        </tbody>
      </table>

@endsection


