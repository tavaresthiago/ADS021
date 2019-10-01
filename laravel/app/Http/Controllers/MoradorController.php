<?php

namespace App\Http\Controllers;

use App\Morador;
use Illuminate\Http\Request;

class MoradorController extends Controller
{
    public function listar(){
        return Morador::all();
    }
    
    public function criar(){
        
    }
    
    public function editar($id){
        return Morador::find($id);
    }
    
    public function remover($id){
        $morador = Morador::find($id);
        $morador -> delete();
        return redirect('morador/listar');
    }
    
    public function salvar(Request $request){
        $morador = new Morador();
        
        if($request->has('id')){
            $morador = Morador::find($id);
        }
        
        $morador->nome = $request->nome;
        $morador->cpf = $request->cpf;
        $morador->email = $request->email;
        $morador->telefone = $request->telefone;
        $morador->placa = $request->placa;
        $morador->veiculo = $request->veiculo;
        $morador->save();
        
        return redirect('morador/listar');
    }
}
