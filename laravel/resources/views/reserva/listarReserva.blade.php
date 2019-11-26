@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Pesquisar Reservas de Áreas do Condomínio</div>
                <div class="input-group">
                    
                </div>
                <div class="panel-body">
                    <table>
                        <tr>
                            <th><label>Condomínio</label></th>
                            <th><label>Data de Reserva</label></th>
                            <th></th>
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
                            <td><a href="{{ url('reserva/pesquisar') }}" class="btn btn-success"> Pesquisar </a></td>
                        </tr>
                    </table>
                    <table class="table">
                        <tr>
                            <th>Area</th>
                            <th>Unidade</th>
                            <th>Situação</th>
                        </tr>
                        @foreach($reservas as $reserva)
                        <tr>
                            <td>{{ $reserva->area->area }}</td>
                            <td>{{ $reserva->unidade->unidade }}</td>
                            <td>{{ $reserva->situacao }}</td>
                        </tr>
                        @endforeach
                    </table>
                    {{ $reservas->links() }}
                </div>
                <div class="panel-body">
                    <a href="{{ url('reserva/criar') }}" class="btn btn-success"> Novo </a>
                    <a href="{{ url('reserva/'.$reserva->id.'/editar') }}" class="btn btn-primary"> Editar </a>   
                    <a href="{{ url('reserva/'.$reserva->id.'/remover') }}" class="btn btn-danger" onclick="return confirm()"> Remover </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
