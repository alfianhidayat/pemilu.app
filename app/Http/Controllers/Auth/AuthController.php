<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\User;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;
    private $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => ['getLogout', 'getRegister', 'postRegister']]);
        $this->middleware('auth.register', ['only' => ['getRegister', 'postRegister']]);
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
            'username' => 'required|max:20|unique:users',
            'password' => 'required|confirmed|min:6',
            'id_number' => 'required|max:20',
            'name' => 'required|max:50'
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
        return User::create([
            'username' => $data['username'],
            'password' => bcrypt($data['password']),
            'id_number' => $data['id_number'],
            'name' => $data['name'],
        ]);
    }

    public function postLogin(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        if(Auth::attempt(['username' => $username, 'password' => $password]))
        {   
            return redirect('/');
        }else{
            return redirect('/auth/login')->withInput();
        }
    }
}
