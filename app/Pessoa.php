<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    
    protected $fillable = ['name', 'contacto', 'nascimento', 'nif', 'sexo', 'peso', 'altura', 'user_id'];

    public function user()
    {
        return $this->hasOne('App\User');
    }

    public function morada()
    {
        return $this->belongsTo('App\Morada');
    }
}