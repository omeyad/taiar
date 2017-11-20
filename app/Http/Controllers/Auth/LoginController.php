<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


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
   // protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected function authenticate(Request $request,$User)
    {
              if($User->type==1)
              {

                  return redirect('/ordersList');

              }

        if($User->type==0)
        {
           $DeliveryTypeValue =  DB::table('delivaries')->select('status')->where('user_id', $User->id)->get();
           if($DeliveryTypeValue==1) {
                      return redirect('/delivarieProfile');
           }

        }



    }
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}