<?php

namespace App\Http\Controllers;

use App\Condominio;
use Illuminate\Http\Request;

class CondominioController extends Controller
{
    public function listar(){
        return Condominio::all();
    }
    
    public function criar(){
        
    }
    
    public function editar($id){
        return Condominio::find($id);
    }
    
    public function remover($id){
        $condominio = Condominio::find($id);
        $condominio -> delete();
        return redirect('condominio/listar');
    }
    
    public function salvar(Request $request){
        $condominio = new Condominio();
        
        if($request->has('id')){
            $condominio = Condominio::find($id);
        }
        
        $condominio->nome = $request->nome;
        $condominio->endereco = $request->cpf;
        $condominio->cnpj = $request->email;
        $condominio->cep = $request->telefone;
        $condominio->bairro = $request->placa;
        $condominio->cidade = $request->veiculo;
        $condominio->uf = $request->uf;
        $condominio->save();
        
        return redirect('condominio/listar');
    }
}
