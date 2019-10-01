<?php

namespace App\Http\Controllers;

use App\Visitante;
use Illuminate\Http\Request;

class VisitanteController extends Controller
{
    public function listar(){
        return Visitante::all();
    }
    
    public function criar(){
        
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
