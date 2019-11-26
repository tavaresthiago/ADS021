@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reservar Áreas do Condomínio</div>

                <div class="panel-body">
                    @if ($errors->any())
                    <ul class="alert alert-warning">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif
                    <form action="{{ url('area/salvar') }}" method="post">
                        {{ csrf_field() }}
                        <div class="input-group">
                            <table>
                                <tr>
                                    <th><label>Condomínio</label></th>
                                    <th><label>Data de Reserva</label></th>
                                </tr>
                                <tr>
                                    <td>
                                        <select class="" name="condominio">
                                            <option value="">Selecione</option>
                                            @foreach($condominios as $condominio)
                                            <option value="{{ $condominio }}">{{ $condominio }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td><input type="date" name="dataReserva"></td>
                                </tr>
                            </table>
                        </div>
                        <div class="input-group">
                            <table>
                                <tr>
                                    <th><label>Área</label></th>
                                    <th><label>Unidade</label></th>
                                </tr>
                                <tr>
                                    <td>
                                        <select class="" name="condominio">
                                            <option value="">Selecione</option>
                                            @foreach($areas as $area)
                                            <option value="{{ $area }}">{{ $area }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td><input type="text" class="text-primary" name="dataReserva"></td>
                                </tr>
                            </table>
                        </div>
                        <div class="input-group">
                            <label>Situação</label><br>
                            <input type="radio" class="radio radio-inline" name="ativa">Ativa
                            <input type="radio" class="radio radio-inline" name="inativa">Inativa
                        </div>
                        <div>
                            <br>
                            <a href="{{ url('area/salvar') }}" class="btn btn-primary"> Salvar </a>   
                            <a href="" class="btn btn-primary"> Cancelar </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
