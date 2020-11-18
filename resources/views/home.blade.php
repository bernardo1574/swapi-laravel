@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    <h2>
                        {{ __('Desafio Técnico') }}
                    </h2>
                </div>

                <div class="card-body">
                        <div class="text-center">
                            <a href="/favorites" class="btn btn-outline-info" >Favoritos</a>
                            <a href=" {{ route('getApi', ['planets', '1']) }} " class="btn btn-outline-info" >Planetas</a>
                            <a href=" {{ route('getApi', ['starships', '1']) }} " class="btn btn-outline-info" >Naves</a>
                        </div>
                        <div>
                            @yield('body')
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
