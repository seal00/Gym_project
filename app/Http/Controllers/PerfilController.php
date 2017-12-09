<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User;
use App\Pessoa;
use Image;

class PerfilController extends Controller
{
    public function index($username){
        $user  = Auth::user($username);
        $teste = $user->id;
        $pessoa = Pessoa::where(['user_id'=>$user->id])->first();
        
        //return [$user, $pessoa];
        return view('perfil',compact('user', 'pessoa'));
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
}
