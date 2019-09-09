<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Category;
use App\models\District;

class PageController extends Controller
{
    public function __construct()
    {
       // $this->middleware('auth');
        $this->cat=Category::all();
        $this->dist=District::all();
    }
    public function index(){
        return view('templates.pages');
    }
    public function about(){
    	$cat=$this->cat;
       $dist=$this->dist;
        return view('user.about',compact('cat','dist'));
    }
    public function contact(){
    	$cat=$this->cat;
       $dist=$this->dist;
        return view('user.contact',compact('cat','dist'));
    }
}
