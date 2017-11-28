<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    public function pessoa()
    {
        return $this->belongsTo('App\Pessoa');
    }
}
