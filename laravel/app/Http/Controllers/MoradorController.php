<?php

namespace App\Http\Controllers;

use App\Morador;
use Illuminate\Http\Request;

class MoradorController extends Controller
{
     public function __construct() {
//        $this->middleware('auth');
    }
    
    public function listar(){
//        return Morador::all();
        $condominio_list = \App\Condominio::pluck('nome', 'id')->all();
        return view('morador.listarMorador', ['moradores' => Morador::paginate(5)], ['condominios' => $condominio_list]);
    }
    
    public function criar(){
        $condominio_list = \App\Condominio::pluck('nome', 'id')->all();
        return view('morador.criarMorador', ['condominios' => $condominio_list]);
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
        $morador->situacao = $request->situacao;
        $morador->unidade = $request->unidade;
        $morador->save();
        
        return redirect('morador/listar');
    }
}
