@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cadastrar Áreas do Condomínio</div>

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
                            <label>Condomínio</label><br>
                            <select class="" name="condominio">
                                <option value="">Selecione</option>
                                @foreach($condominios as $condominio)
                                <option value="{{ $condominio }}">{{ $condominio }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="input-group">
                            <label>Área</label><br>
                            <input type="text" class="text-primary" name="area">
                        </div>
                        <div class="input-group">
                            <label>Situação</label><br>
                            <input type="checkbox" class="checkbox checkbox-inline" name="ativa">Ativa
                            <input type="checkbox" class="checkbox checkbox-inline" name="inativa">Inativa
                        </div>
                        <div>
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
