<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use Illuminate\Http\Request;
use auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/index';
    /**
     * Create a new controller instance.
     *
     * @return void
     */

     public function login(Request $request)
    {
        
        if(Auth::attempt(['username'=>$request['username'],'password'=>$request['password']]))
        {    
            $user = User::find(Auth::user()->id);

           if($user->active == 0)
             {
                
                 $user['active']=1;
                 $user->save();
                 return redirect('/index');
            }
            else
            {
                 return redirect('login')->with('alert', 'Akun '. $user['name'] .' sedang digunakan');
             }
        }
        else
        {
            return redirect('login')->with('alert', 'Akun tidak terdaftar');
        }
    }

    public function username()
    {
        return 'username';
    }

    public function index()
    {
        return view('auth.login');
    }

    public function logout(Request $request) {
        $user = User::find(Auth::user()->id);
        $user['active']=0;
        $user->save();
        Auth::logout();
        return redirect('login');
    }
}
