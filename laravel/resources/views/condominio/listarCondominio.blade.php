@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Pesquisar Condomínios</div>
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <th>Nome</th>
                            <th>CNPJ</th>
                            <th>Cidade</th>
                            <th>UF</th>
                        </tr>
                        @foreach($condominios as $condominio)
                        <tr>
                            <td>{{ $condominio->nome }}</td>
                            <td>{{ $condominio->cnpj }}</td>
                            <td>{{ $condominio->cidade }}</td>
                            <td>{{ $condominio->uf }}</td>
                            <td>
                                
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    {{ $condominios->links() }}
                </div>
                <div class="panel-body">
                    <a href="{{ url('condominio/criar') }}" class="btn btn-success"> Novo </a>
                    <a href="{{ url('condominio/'.$condominio->id.'/editar') }}" class="btn btn-primary"> Editar </a>   
                    <a href="{{ url('condominio/'.$condominio->id.'/remover') }}" class="btn btn-danger" onclick="return confirm()"> Remover </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
