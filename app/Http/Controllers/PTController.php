<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PTController extends Controller
{
    //
    public function pT()
    {
        $title = 'Contacte o seu PT';
        return view('pt')->with('title', $title);
    }
}
