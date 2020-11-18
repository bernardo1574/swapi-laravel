@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex">
                <div class="col-md-3">
                    <a href="/">
                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                    </a>
                </div>
                <h5 class="text-center col-md-6">
                    Swapi
                </h5>
            </div>
            <div class="card-body">
                @if( count($return['arrayApi']) )
                    <table class="table ">
                        <thead>
                        <tr>
                            <th class="text-center col-md-10">
                                Name
                            </th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach( $return['arrayApi'] as $api )
                            <tr>
                                <td  class="text-center">
                                    {{ $api['name'] }}
                                </td>
                                <td class="text-center">
                                    <button class="btn btn-outline-info tbn-sm" onclick="api('{{ $api['url'] }}')" data-toggle="modal" data-target="#modalStarWars">
                                        <span class="fa fa-eye"></span>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex">
                        <div class="col-6 text-left">
                            @if(!empty($return['previous']))
                                <a href="{{ route('getApi', [$return['type'], $return['previous']]) }}">Voltar</a>
                            @endif
                        </div>
                        <div class=" col-6 text-right">
                            @if(!empty($return['next']))
                                <a href="{{ route('getApi', [$return['type'], $return['next']]) }}">Próximo</a>
                            @endif
                        </div>
                    </div>
                    {{ view ('modal.'.$return['type'], [ 'insert' => true ]) }}
                @endif
            </div>
        </div>
    </div>



@endsection
