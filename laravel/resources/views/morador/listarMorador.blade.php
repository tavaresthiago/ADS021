@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Pesquisar Moradores do Condomínio</div>
                <div class="panel-body">
                    <table>
                        <tr>
                            <th><label>Condomínio</label></th>
                            <th><label>Unidade</label></th>
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
                            <td><input type="text" class="text-primary" name="unidade"></td>
                        </tr>
                    </table>
                </div>
                <div class="panel-body">
                            <table>
                                <tr>
                                    <th><label>Morador</label><br></th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <td><input type="text" class="text-primary" name="morador"></td>
                                    <td><a href="{{ url('area/pesquisar') }}" class="btn btn-success"> Pesquisar </a></td>
                                </tr>
                            </table>
                        </div>
                <div class="panel-body">
                        <table class="table">
                            <tr>
                                <th>Unidade</th>
                                <th>Morador</th>
                                <th>E-mail</th>
                                <th>Telefone</th>
                                <th>Situação</th>
                            </tr>
                            @foreach($moradores as $morador)
                            <tr>
                                <td>Unidade</td>
                                <td>{{ $morador->nome }}</td>
                                <td>{{ $morador->email }}</td>
                                <td>{{ $morador->telefone }}</td>
                                <td>Situação</td>
                            </tr>
                            @endforeach
                        </table>
                        {{ $moradores->links() }}
                </div>
                <div class="panel-body">
                    <a href="{{ url('morador/criar') }}" class="btn btn-success"> Novo </a>
                    <a href="{{ url('morador/'.$morador->id.'/editar') }}" class="btn btn-primary"> Editar </a>   
                    <a href="{{ url('morador/'.$morador->id.'/remover') }}" class="btn btn-danger" onclick="return confirm()"> Remover </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
