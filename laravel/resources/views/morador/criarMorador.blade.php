@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cadastrar Moradores do Condomínio</div>

                <div class="panel-body">
                    @if ($errors->any())
                    <ul class="alert alert-warning">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif
                    <form action="{{ url('morador/salvar') }}" method="post">
                        {{ csrf_field() }}
                        <div class="input-group">
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
                        <div class="input-group">
                            <table>
                                <tr>
                                    <th><label>Morador</label><br></th>
                                    <th><label>CPF</label><br></th>
                                </tr>
                                <tr>
                                    <td><input type="text" class="text-primary" name="morador"></td>
                                    <td><input type="text" class="text-primary" name="cpf"></td>
                                </tr>
                            </table>
                        </div>
                        <div class="input-group">
                            <table>
                                <tr>
                                    <th><label>E-mail</label><br></th>
                                    <th><label>Telefone</label><br></th>
                                </tr>
                                <tr>
                                    <td><input type="text" class="text-primary" name="email"></td>
                                    <td><input type="text" class="text-primary" name="telefone"></td>
                                </tr>
                            </table>
                        </div>
                        <div class="input-group">
                            <table>
                                <tr>
                                    <th><label>Placa</label></th>
                                    <th><label>Veículo</label></th>
                                </tr>
                                <tr>
                                    <td><input type="text" class="text-primary" name="placa"></td>
                                    <td><input type="text" class="text-primary" name="veiculo"></td>
                                </tr>
                            </table>
                        </div>
                        <div class="input-group">
                            <label>Situação</label><br>
                            <input type="checkbox" class="checkbox checkbox-inline" name="ativa">Ativa
                            <input type="checkbox" class="checkbox checkbox-inline" name="inativa">Inativa
                        </div>
                        <div>
                            <br>
                            <a href="{{ url('morador/salvar') }}" class="btn btn-primary"> Salvar </a>   
                            <a href="" class="btn btn-primary"> Cancelar </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
