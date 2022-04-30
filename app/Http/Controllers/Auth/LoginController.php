<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

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
    protected $redirectTo;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function redirectTo()
    {
        if(Auth::user()->roles == 1){
            
                $this->redirectTo = '/superadmin';
                return $this->redirectTo;
            }
        if(Auth::user()->roles == 2){
            $this->redirectTo = '/supervisor';
            return $this->redirectTo;
        }
        else{
            $this->redirectTo = '/login';
                return $this->redirectTo;
        }
           
                
        
         
        // return $next($request);
    } 

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
