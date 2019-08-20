<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Category;
use App\models\Product;
use App\models\District;

class ProductController extends Controller
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

    public function productDetail($id){
    	$cat=$this->cat;
    	$dist=$this->dist;
    	$product=Product::where('id',$id)->with('category','files','shg')->orderBy('id','desc')->first();
    	$products=Product::with('category','files')->orderBy('id','desc')->take(10)->get();  
    	//dd($products);
    	 return view('user.product',compact('cat','products','dist','product'));
    }
}
