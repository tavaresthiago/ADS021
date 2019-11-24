<?php

namespace App\Http\Controllers;

use App\Visitante;
use Illuminate\Http\Request;

class VisitanteController extends Controller
{
    public function listar(){
//        return Visitante::all();
        $condominio_list = \App\Condominio::pluck('nome', 'id')->all();
        return view('visitante.listarVisitante', ['visitantes' => Visitante::paginate(5)], ['condominios' => $condominio_list]);
    }
    
    public function criar(){
        $condominio_list = \App\Condominio::pluck('nome', 'id')->all();
        return view('visitante.criarVisitante', ['condominios' => $condominio_list]);
    }
    
    public function editar($id){
        return Visitante::find($id);
    }
    
    public function remover($id){
        $visitante = Visitante::find($id);
        $visitante -> delete();
        return redirect('visitante/listar');
    }
    
    public function salvar(Request $request){
        $visitante = new Visitante();
        
        if($request->has('id')){
            $visitante = Visitante::find($id);
        }
        
        $visitante->nome = $request->nome;
        $visitante->rg = $request->rg;
        $visitante->data_entrada = $request->data_entrada;
        $visitante->save();
        
        return redirect('visitante/listar');
    }
    
    
}
