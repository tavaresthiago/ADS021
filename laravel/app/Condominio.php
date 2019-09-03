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
}
