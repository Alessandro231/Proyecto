
@extends('layouts.app')


@section('content')
<div class="container">
    
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Bandeja de entrada') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Estas logueado!') }}

                </div>
                <div data-poke-img-container class="img-container">
                    <img src="images/log.jpeg" alt="Post Javascript" class="img-fluid">
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
