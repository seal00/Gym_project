<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User;
use App\Pessoa;

class PerfilController extends Controller
{
    public function index($username){
        $user  = Auth::user($username);
        $teste = $user->id;
        $pessoa = Pessoa::where(['user_id'=>$user->id])->first();
        
        //return [$user, $pessoa];
        return view('perfil',compact('user', 'pessoa'));
    }
}
