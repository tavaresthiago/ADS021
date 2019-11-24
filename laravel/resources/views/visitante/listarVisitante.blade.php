@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Lista Visitante</div>

                <div class="panel-body">
                    <table>
                        <tr>
                            <th><label>Condomínio</label></th>
                            <th><label>Data de Entrada</label></th>
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
                            <td><input type="date" class="text-primary" name="data"></td>
                            <td><a href="{{ url('visitante/pesquisar') }}" class="btn btn-success"> Pesquisar </a></td>
                        </tr>
                    </table>
                    <table class="table">
                        <tr>
                            <th>Unidade</th>
                            <th>Visitante</th>
                            <th>RG</th>
                        </tr>
                        @foreach($visitantes as $visitante)
                        <tr>
                            <td>Unidade</td>
                            <td>{{ $visitante->nome }}</td>
                            <td>{{ $visitante->rg }}</td>
                        </tr>
                        @endforeach
                    </table>
                    {{ $visitantes->links() }}
                </div>
                <div class="panel-body">
                    <a href="{{ url('visitante/criar') }}" class="btn btn-success"> Novo </a>
                    <a href="{{ url('visitante/'.$visitante->id.'/editar') }}" class="btn btn-primary"> Editar </a>   
                    <a href="{{ url('visitante/'.$visitante->id.'/remover') }}" class="btn btn-danger" onclick="return confirm()"> Remover </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
