@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cadastrar Visitantes do Condomínio</div>

                <div class="panel-body">
                    @if ($errors->any())
                    <ul class="alert alert-warning">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif
                    <form action="{{ url('visitante/salvar') }}" method="post">
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
                                    <th><label>Visitante</label></th>
                                    <th><label>RG</label></th>
                                </tr>
                                <tr>
                                    <td><input type="text" class="text-primary" name="visitante"></td>
                                    <td><input type="text" class="text-primary" name="rg"></td>
                                </tr>
                            </table>
                        </div>
                        <div class="input-group">
                            <table>
                                <tr>
                                    <th><label>Data de Entrada</label></th>
                                </tr>
                                <tr>
                                    <td><input type="date" class="text-primary" name="data"></td>
                                </tr>
                            </table>
                        </div>
                        <div>
                            <br>
                            <a href="{{ url('visitante/salvar') }}" class="btn btn-primary"> Salvar </a>   
                            <a href="" class="btn btn-primary"> Cancelar </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
