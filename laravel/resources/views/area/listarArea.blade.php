@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Pesquisar Áreas do Condomínio</div>
                <div class="input-group">
                    
                </div>
                <div class="panel-body">
                    <label>Condomínio</label><br>
                    <select class="" name="condominio">
                        <option value="">Selecione</option>
                        @foreach($condominios as $condominio)
                        <option value="{{ $condominio }}">{{ $condominio }}</option>
                        @endforeach
                    </select>
                    <a href="{{ url('area/pesquisar') }}" class="btn btn-success"> Pesquisar </a>
                        <table class="table">
                            <tr>
                                <th>Area</th>
                                <th>Situação</th>
                            </tr>
                            @foreach($areas as $area)
                            <tr>
                                <td>{{ $area->area }}</td>
                                <td>{{ $area->situacao }}</td>
                            </tr>
                            @endforeach
                        </table>
                        {{ $areas->links() }}
                </div>
                <div class="panel-body">
                    <a href="{{ url('area/criar') }}" class="btn btn-success"> Novo </a>
                    <a href="{{ url('area/'.$area->id.'/editar') }}" class="btn btn-primary"> Editar </a>   
                    <a href="{{ url('area/'.$area->id.'/remover') }}" class="btn btn-danger" onclick="return confirm()"> Remover </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
