<?php

namespace App\Http\Controllers;

use App\Reserva;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    public function __construct() {
//        $this->middleware('auth');
    }

    public function listar(){
//        return Area::all();
        $condominio_list = \App\Condominio::pluck('nome', 'id')->all();
        return view('reserva.listarReserva', ['reservas' => Reserva::paginate(5)], ['condominios' => $condominio_list]);
    }
    
    public function criar(){
        $condominio_list = \App\Condominio::pluck('nome', 'id')->all();
        $area_list = \App\Area::pluck('area', 'id')->all();
        return view('reserva.criarReserva', ['condominios' => $condominio_list], ['areas' => $area_list]);
    }

    public function editar($id){
        return Area::find($id);
    }
    
    public function remover($id){
        $area = Area::find($id);
        $area -> delete();
        return redirect('reserva/listar');
    }
    
    public function salvar(Request $request){
        $reserva = new Reserva();
        
        if($request->has('id')){
            $reserva = Reserva::find($id);
        }
        
        $reserva->condominio = $request->condomino;
        $reserva->dataReserva = $request->dataReserva;
        $reserva->area = $request->area;
        $reserva->unidade = $request->unidade;
        $reserva->situacao = $request->situacao;
        $reserva->save();
        
        return redirect('reserva/listar');
    }
}
