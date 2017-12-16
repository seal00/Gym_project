<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User;
use App\Pessoa;
use App\Morada;
use Image;

class PerfilController extends Controller
{
    public function index($username){
        $user  = Auth::user($username);
        $teste = $user->id;
        
        //dd($teste);
        $pessoa = Pessoa::where(['user_id'=>$user->id])->first();
        //dd($pessoa->morada_id);
        //$posts = Morada::all();
        //dd($posts);
        if(($pessoa->morada_id) != NULL){
        $morada = Morada::where(['id'=>($pessoa->morada_id)])->first();
        return view('perfil',compact('user', 'pessoa', 'morada'));
    }else
    return view('perfil',compact('user', 'pessoa'));
        //dd($morada);
        //return [$user, $pessoa, $morada];
        
    }

    public function update_avatar(Request $request){

        if($request->hasFile('avatar')){
    		$avatar = $request->file('avatar');
    		$filename = time() . '.' . $avatar->getClientOriginalExtension();
    		Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );

    		$user = Auth::user();
    		$user->avatar = $filename;
            $user->save();
            $pessoa = Pessoa::where(['user_id'=>$user->id])->first();
        }
        return view('perfil',compact('user', 'pessoa'));
    }

    public function show_edit(){
        return view('edit_perfil');
    }

    public function edit(Request $request){
        $user = Auth::user();
        $pessoa = Pessoa::where(['user_id'=>$user->id])->first();
        //dd($pessoa);
        if($pessoa){
            $pessoa->name = $request->name;
            $pessoa->contacto = $request->contacto;
            $pessoa->nascimento = $request->nascimento;
            $pessoa->nif = $request->nif;
            $pessoa->sexo = $request->sexo;
            $pessoa->peso = $request->peso;
            $pessoa->altura = $request->altura;
            $pessoa->save();
            return redirect("/home/$user->username");
        }else{
    		return redirect("/home");
    	}
    }

}
