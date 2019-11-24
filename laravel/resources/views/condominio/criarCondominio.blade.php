@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cadastrar Condomínios</div>

                <div class="panel-body">
                    @if ($errors->any())
                    <ul class="alert alert-warning">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif
                    <form action="{{ url('condominio/salvar') }}" method="post">
                        {{ csrf_field() }}
                        <div class="input-group">
                            <table>
                                <tr>
                                    <th><label>Nome</label></th>
                                    <th><label>CNPJ</label></th>
                                </tr>
                                <tr>
                                    <td><input type="text" class="text-primary" name="visitante"></td>
                                    <td><input type="text" class="text-primary" name="cnpj"></td>
                                </tr>
                            </table>
                        </div>
                        <div class="input-group">
                            <table>
                                <tr>
                                    <th><label>Endereço</label><br></th>
                                    <th><label>CEP</label><br></th>
                                </tr>
                                <tr>
                                    <td><input type="text" class="text-primary" name="endereco"></td>
                                    <td><input type="text" class="text-primary" name="cnpj"></td>
                                </tr>
                            </table>
                        </div>
                        <div class="input-group">
                            <table>
                                <tr>
                                    <th><label>Bairro</label></th>
                                    <th><label>Cidade</label></th>
                                    <th><label>UF</label></th>
                                </tr>
                                <tr>
                                    <td><input type="text" class="text-primary" name="bairro"></td>
                                    <td><input type="text" class="text-primary" name="cidade"></td>
                                    <td>
                                        <select class="" name="UF">
                                            <option value="">Selecione</option>
                                            <option value="">AC</option>
                                            <option value="">AL</option>
                                            <option value="">AP</option>
                                            <option value="">AM</option>
                                            <option value="">BA</option>
                                            <option value="">CE</option>
                                            <option value="">DF</option>
                                            <option value="">ES</option>
                                            <option value="">GO</option>
                                            <option value="">MA</option>
                                            <option value="">MT</option>
                                            <option value="">MS</option>
                                            <option value="">MG</option>
                                            <option value="">PA</option>
                                            <option value="">PB</option>
                                            <option value="">PR</option>
                                            <option value="">PE</option>
                                            <option value="">PI</option>
                                            <option value="">RJ</option>
                                            <option value="">RN</option>
                                            <option value="">RS</option>
                                            <option value="">RO</option>
                                            <option value="">RR</option>
                                            <option value="">SC</option>
                                            <option value="">SP</option>
                                            <option value="">SE</option>
                                            <option value="">TO</option>
                                        </select>
                                    </td>
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
