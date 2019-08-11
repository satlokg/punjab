<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\admin\Shg;

class ShgLoginController extends Controller
{
    
    /**
     * Show the application’s login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('auth.shg-login');
    }
    protected function guard(){
        return Auth::guard('shg');
    }
    
    use AuthenticatesUsers;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/shg/dashboard';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
public function userLogin(Request $request){
   $this->validate($request, array(
        'username' => 'required',
        'password' => 'required'
         
      ));
$value=$request->input('password');
 $user = Shg::where('contact','=',$request->input('username'))
               ->where('password','=',$value)
               ->first();
               //dd($user);
               if ($user) {
                  Auth::guard('shg')->loginUsingId($user->id, TRUE);
               }
    if ($user)
        {
              return redirect('/shg/dashboard');
        }else{
            $request->session()->flash('alert-danger', 'These credentials do not match our records.');
            return back();
        }
    }
public function userLogout() { 
     $data= auth('shg')->logout();
        return redirect('/shg/login');
    }
    public function __construct()
    {
        $this->middleware('guest:shg')->except('userLogout');
    }

}
