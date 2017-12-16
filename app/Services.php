<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    // public function cliente()
    // {
    //     return $this->hasMany('App\Cliente');
    // }

    public function services()
    {
        return $this->belongsTo('App\Services');
    }

    // muitos serviços têm muitos clientes
    public function clientes()
    {
        return $this->belongsToMany('App\Cliente');
    }
}
