<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Morador extends Model
{
    protected $table = 'tb_morador';
    
    public function condominio()
    {
        return $this->belongsTo('App\Condominio');
    }
}
