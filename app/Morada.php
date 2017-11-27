<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Morada extends Model
{
    public function pessoa()
    {
        return $this->hasMany('App\Pessoa');
    }
}
