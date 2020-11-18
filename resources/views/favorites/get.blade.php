@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex">
                <div class="col-md-3">
                    <a href="/favorites">
                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                    </a>
                </div>
                <h5 class="text-center col-md-6">
                    {{ $return['typeString'] }}
                </h5>
            </div>
            <div class="card-body">
                @if(count($return['array']))
                    <table class="table">
                        <thead>
                        <tr>
                            <th class="text-center col-md-10">
                                Nome
                            </th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach( $return['array'] as $type )
                            <tr>
                                <td  class="text-center">
                                    {{ $type['name'] }}
                                </td>
                                <td>
                                    <button class="btn btn-outline-info " onclick="api('{{ $type['url'] }}')" data-toggle="modal" data-target="#modalStarWars">
                                        <span class="fa fa-eye"></span>
                                    </button>
                                </td>
                                <td>
                                    <form action="{{ route ('delete') }}" method="POST">
                                        <input type="hidden" name="id" value="{{ $type['id'] }}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn  btn-outline-danger">
                                            <span class="fa fa-trash"></span>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="text-center mt-1">
                        <span>Pôooo, você ainda não tem nada como favorito. Adiciona lá!</span>
                    </div>
                @endif
            </div>
        </div>
    </div>
    {{ view ('modal.'.$return['type'])}}
@endsection
