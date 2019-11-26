<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $table = 'tb_reservas';
    
    public function condominio()
    {
        return $this->belongsTo('App\Condominio');
    }
    
    public function area()
    {
        return $this->belongsTo('App\Area');
    }
    
    public function unidade()
    {
        return $this->belongsTo('App\Unidade');
    }
}
