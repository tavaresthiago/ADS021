<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condominio extends Model
{
    protected $table = 'tb_condominio';
    
    public function visitante()
    {
        return $this->hasMany('App\Visitante');
    }
    
    public function unidade()
    {
        return $this->hasMany('App\Unidade');
    }
    
    public function morador()
    {
        return $this->hasMany('App\Morador');
    }
    
    public function area()
    {
        return $this->hasMany('App\Area');
    }
    
    public function reserva()
    {
        return $this->hasMany('App\Reserva');
    }
    
}
