<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['pessoa_id'];
    
    public function pessoa()
    {
        return $this->belongsTo('App\Pessoa');
    }
}
