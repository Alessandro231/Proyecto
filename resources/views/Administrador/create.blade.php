@extends('layouts.style')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Anadir nuevo pokemon</h2>
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

<form action="{{ route('pokemon.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre del pokemon</strong>
                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Avatar del pokemon</strong>
                <input type="file" name="imagen" id="imagen" class="form-control" accept="image/" placeholder="Avatar">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tipo(s) del pokemon</strong>
                <input type="text" name="tipo" id="tipo" class="form-control" placeholder="Tipo(s)">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Categoria(s) del pokemon</strong>
                <input type="text" name="categoria" id="categoria" class="form-control" placeholder="Categoria(s)">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Habilidad(es) del pokemon</strong>
                <input type="text" name="habilidad" id="habilidad" class="form-control" placeholder="Habilidad(es)">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Debilidad(es) del pokemon</strong>
                <input type="text" name="debilidad" id="debilidad" class="form-control" placeholder="Debilidad(es)">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection
