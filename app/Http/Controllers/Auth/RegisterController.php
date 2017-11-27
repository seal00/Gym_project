<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Pessoa;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => 'required|unique:users|max:20',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'contacto' => 'required|regex:/^[0-9]{9}$/',
            'name' => 'required|max:255',
            'nascimento' => 'required|regex:/^[0-3]?[0-9].[0-3]?[0-9].(?:[0-9]{2})?[0-9]{2}$/',
            'nif' => 'required|max:255',
            'sexo' => 'required|max:255',
            'peso' => 'required|max:255',
            'altura' => 'required|max:255',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        $user->pessoa = Pessoa::create([
            'name' => $data['name'],
            'contacto' => $data['contacto'],
            'nascimento' => $data['nascimento'],
            'nif' => $data['nif'],
            'sexo' => $data['sexo'],
            'peso' => $data['peso'],
            'altura' => $data['altura'],
            'user_id' => $user->id,
        ]);

        return $user;
    }
}
