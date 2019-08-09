<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//
use Auth;
//

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Session;
use DateTime;
use links;
use Toast;
use App\Role;
use Mail;
use PDF;
use Response;
use App\PasswordReset;

//
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function register(){
                 dd("heeee"); die();
  }
    public function index(){
    	//dd("xxxx");
        return view('templates.menus');
    }
    public  function contact(){
    	//dd("hello");
    	return  view('user.contact');
    }

     public  function about(){
        //dd("hello");
        return  view('user.about');
    }

    public  function collection(){
        //dd("hello");
        return  view('user.shop');
    }

    public function logout() {
        //logout user

    $ab = \Auth::logout();
        // redirect to homepage
    return redirect('/');
}
  public  function myaccount(){
    return view('user.myaccount');
  }

  
}
