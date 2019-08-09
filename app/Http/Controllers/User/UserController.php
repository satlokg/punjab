<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//
use Auth;
//
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

//
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
    	dd("xxxx");
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

  public function register1(){
                 dd("heeee");
  }
}
