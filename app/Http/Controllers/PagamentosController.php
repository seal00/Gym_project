<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagamentosController extends Controller
{
    //
    public function pagamentos()
    {
       $title = 'Pagamentos';
        return view('pagamentos')->with('title', $title);
    }
}
