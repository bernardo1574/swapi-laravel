@extends('layouts.app')

@section('content')

    <div class="container">
        @if( isset($success) )
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ $success }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="card">
            <div class="card-header d-flex">
                <div class="col-md-3">
                    <a href="/">
                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                    </a>
                </div>
                <h5 class="text-center col-md-6">
                    Bem vindo a sua página de Favoritos
                </h5>
            </div>
            <div class="card-body">
                <div class="text-center">
                    <a href="/favorites/planets" class="btn btn-outline-info">Planetas</a>
                    <a href="/favorites/starships" class="btn btn-outline-info">Naves</a>
                </div>
            </div>
        </div>
    </div>

@endsection
