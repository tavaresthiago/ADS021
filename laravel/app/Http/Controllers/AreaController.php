<?php

namespace App\Http\Controllers;

use App\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function listar(){
        return Area::all();
    }
    
    public function criar(){
        
    }
    
    public function editar($id){
        return Area::find($id);
    }
    
    public function remover($id){
        $area = Area::find($id);
        $area -> delete();
        return redirect('area/listar');
    }
    
    public function salvar(Request $request){
        $area = new Area();
        
        if($request->has('id')){
            $area = Area::find($id);
        }
        
        $area->area = $request->area;
        $area->situacao = $request->situacao;
        $area->save();
        
        return redirect('area/listar');
    }
}
