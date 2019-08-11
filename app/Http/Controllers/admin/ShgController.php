<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Product;
use Auth;
use App\models\Category;

class ShgController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:shg');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('shg.dashboard');
    }

    public function products()
    {
        $products=Product::where('contact',Auth::guard('shg')->user()->contact)->paginate(10); 
        return view('shg.products',compact('products'));
    }

    public function productsAdd(Request $r)
    {
        if(!empty($r->post())){
            dd($r->all());
        }
        $categories=Category::all();
        return view('shg.product.add',compact('categories'));
    }
}
