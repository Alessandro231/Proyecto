@extends('layouts.style')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar pokemon</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('pokemon.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('pokemon.update',$pokemon->id) }}" method="POST" enctype="multipart/form-data">
        @csrf

        @method('PUT')
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre</strong>
                    <input type="text" name="nombre" id="nombre" value="{{ $pokemon->nombre }}" class="form-control" placeholder="Title">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Avatar</strong>
                    <input type="file" name="imagen" id="imagen" value="{{ $pokemon->imagen }}" class="form-control" placeholder="Title">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tipo</strong>
                    <input type="text" name="tipo" id="tipo" value="{{ $pokemon->tipo }}" class="form-control" placeholder="Title">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Categoria</strong>
                    <input type="text" name="categoria" id="categoria" value="{{ $pokemon->categoria }}" class="form-control" placeholder="Title">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>habilidad</strong>
                    <input type="text" name="habilidad" id="habilidad" value="{{ $pokemon->habilidad }}" class="form-control" placeholder="Title">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Debilidad</strong>
                    <input type="text" name="debilidad" id="debilidad" value="{{ $pokemon->debilidad }}" class="form-control" placeholder="Title">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
