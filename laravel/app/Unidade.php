<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidade extends Model
{
    protected $table = 'tb_unidade';
    
    public function condominio()
    {
        return $this->belongsTo('App\Condominio');
    }
    
    public function morador()
    {
        return $this->belongsTo('App\Morador');
    }
    
    public function visitante()
    {
        return $this->hasMany('App\Visitante');
    }
    
    public function reserva()
    {
        return $this->hasMany('App\Reserva');
    }
}
