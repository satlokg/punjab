<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Category;
use App\models\Product;
use App\models\District;
use Auth;
use App\models\Order;

//
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->cat=Category::all();
        $this->dist=District::all();
    }
    public function index()
    {
       $cat=$this->cat;
       $dist=$this->dist;
       $orders = Order::where('user_id',Auth::user()->id)->with('products.shg','products.files')->paginate(10);
       return view('user.account',compact('cat','dist','orders'));
    }
  
}
