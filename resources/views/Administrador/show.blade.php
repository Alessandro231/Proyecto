@extends('layouts.style')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Mostrar Pokemon</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('pokemon.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre</strong>
                {{ $pokemon->nombre }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Avatar</strong>
                {{ $pokemon->imagen }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tipor</strong>
                {{ $pokemon->tipo }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Categoria</strong>
                {{ $pokemon->categoria }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Habilidad</strong>
                {{ $pokemon->habilidad }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Debilidad</strong>
                {{ $pokemon->debilidad }}
            </div>
        </div>

    </div>
@endsection
