<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitante extends Model
{
    protected $table = 'tb_visitante';
    
    public function condominio()
    {
        return $this->belongsTo('App\Condominio');
    }
    public function unidade()
    {
        return $this->belongsTo('App\Unidade');
    }
}
