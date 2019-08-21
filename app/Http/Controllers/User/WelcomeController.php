<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Category;
use App\models\Product;
use App\models\District;
use App\models\Shg;

class WelcomeController extends Controller
{
   public function __construct()
    {
        //$this->middleware('auth:web');
        $this->cat=Category::all();
        $this->dist=District::all();
    }
    public function index(){
    	$cat=$this->cat;
    	$dist=$this->dist;
    	$products=Product::with('category','files')->orderBy('id','desc')->paginate(15); //dd($products[0]->category);
    	 return view('welcome',compact('cat','products','dist'));
    }
    public function districts($d){
    	$cat=$this->cat;
    	$dist=$this->dist;
    	$products=District::with(['products.category'=> function ($query) {
          $query->orderBy('id','desc');
        }])
        ->with('products.files')
    	->where('name',$d)
    	->first(); //dd($products);
    	 return view('user.district-product',compact('cat','products','dist'));
    }

    public function category($c){
    	$cat=$this->cat;
    	$dist=$this->dist;
    	$products=Category::with('products.files')
    	->where('name',$c)
    	->orderBy('id','desc')->first();
    	 return view('user.category-product',compact('cat','products','dist'));
    }
    public function shgstore($c){
        $cat=$this->cat;
        $dist=$this->dist;
        $products=Shg::with('products.files')
        ->where('name',$c)
        ->orderBy('id','desc')->first(); //dd($products);
         return view('user.shg-product',compact('cat','products','dist'));
    }

}
