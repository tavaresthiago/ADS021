<?php

namespace App\Http\Controllers;

use App\Unidade;
use Illuminate\Http\Request;

class UnidadeController extends Controller
{
    public function listar(){
        return Unidade::all();
    }
    
    public function criar(){
        
    }
    
    public function editar($id){
        return Unidade::find($id);
    }
    
    public function remover($id){
        $unidade = Unidade::find($id);
        $unidade -> delete();
        return redirect('unidade/listar');
    }
    
    public function salvar(Request $request){
        $unidade = new Unidade();
        
        if($request->has('id')){
            $unidade = Unidade::find($id);
        }
        
        $unidade->unidade = $request->unidade;
        $unidade->save();
        
        return redirect('unidade/listar');
    }
}
