<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table = 'tb_area';
    
    public function condominio()
    {
        return $this->belongsTo('App\Condominio');
    }
}
