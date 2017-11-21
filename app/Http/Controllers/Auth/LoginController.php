<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use DB;
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


        protected function authenticated(Request $request, $user)
    {
        if ( $user->type == 1 ) {
            return redirect('/orders');
        }
        if ( $user->type == 0 ) {

////         $DeliveryTypeValue =  DB::table('delivaries')->where('user_id', $user->id)->first();
/// if($DeliveryTypeValue->status==1) {
////             dd('hello delivary');
////                return redirect('/delivaryprofile');
            return redirect('/ordersList');
        }

//        return redirect('/welcome');

//        if($user->type== 0)
//        {
//            return redirect('/delivaryProfile');
////         $DeliveryTypeValue =  DB::table('delivaries')->where('user_id', $user->id)->first();
////         if($DeliveryTypeValue->status==1) {
////
////                 return redirect('/delivaryProfile');
////          }
////
//      }



    }
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
