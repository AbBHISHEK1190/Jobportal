<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

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
    // protected $redirectTo = RouteServiceProvider::HOME;

    protected $redirectTo;

    public function redirectTo()
	  {
        // print_r(Auth::user()->account_type);die;
	
		switch(Auth::user()->account_type){
            case 1:
            $this->redirectTo = url('admin/dashboard');
            return $this->redirectTo;
                break;
           case 2:
            $this->redirectTo = url('recruiter/dashboard');
            return $this->redirectTo;
                break;
                case 3:
                    $this->redirectTo = url('iuser/dashboard');
                    return $this->redirectTo;
                        break;
          default:
                $this->redirectTo = '/login';
                return $this->redirectTo;
		}

	  }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
