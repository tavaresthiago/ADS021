@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Pesquisar Unidades do Condomínio</div>

                <div class="panel-body">
                    <label>Condomínio</label><br>
                    <select class="" name="condominio">
                        <option value="">Selecione</option>
                        @foreach($condominios as $condominio)
                        <option value="{{ $condominio }}">{{ $condominio }}</option>
                        @endforeach
                    </select>
                    <a href="{{ url('unidade/pesquisar') }}" class="btn btn-success"> Pesquisar </a>
                        <table class="table">
                            <tr>
                                <th>Unidade</th>
                                <th>Proprietário</th>
                                <th>E-mail</th>
                                <th>Telefone</th>
                            </tr>
                            @foreach($unidades as $unidade)
                            <tr>
                                <td>{{ $unidade->unidade }}</td>
                                <td>Proprietário</td>
                                <td>E-mail</td>
                                <td>Telefone</td>
                            </tr>
                            @endforeach
                        </table>
                        {{ $unidades->links() }}
                </div>
                <div class="panel-body">
                    <a href="{{ url('unidade/criar') }}" class="btn btn-success"> Novo </a>
                    <a href="{{ url('unidade/'.$unidade->id.'/editar') }}" class="btn btn-primary"> Editar </a>   
                    <a href="{{ url('unidade/'.$unidade->id.'/remover') }}" class="btn btn-danger" onclick="return confirm()"> Remover </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
