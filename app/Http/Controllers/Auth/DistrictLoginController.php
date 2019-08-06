<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\admin\District;

class DistrictLoginController extends Controller
{
   

    /**
     * Show the application’s login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('auth.district-login');
    }
    protected function guard(){
        return Auth::guard('district');
    }
    
    use AuthenticatesUsers;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/district/dashboard';
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
 $user = District::where('name','=',$request->input('username'))
               ->where('password','=',md5($value))
               ->first(); //dd($user);
               if ($user) {
                  Auth::guard('district')->loginUsingId($user->id, TRUE);
               }
    if ($user)
        {
              return redirect('/district/dashboard');
        }else{
            $request->session()->flash('alert-danger', 'These credentials do not match our records.');
            return back();
        }
    }
public function userLogout() {
     $data= auth('district')->logout();
        return redirect('/user-login');
    }
    public function __construct()
    {
        $this->middleware('guest:district')->except('logout');
    }

}
