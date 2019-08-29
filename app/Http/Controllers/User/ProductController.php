<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Cart;
use App\models\Category;
use App\models\Product;
use App\models\District;
use App\models\Address;
use App\models\Order;
use DB;

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

    public function checkout(Request $r){
        if($r->post()){
            $addr=$r->all();
            $address=$addr['billing'];
            $address['type']="billing";
            Address::create($address);
            if(isset($addr['shipping']['ship'])){
                $address['type']="shipping";
                $a=Address::create($address);
            }else{
                $address['type']="shipping";
                $a=Address::create($address);
            }
            $order=Order::create([
                'user_id'=>Auth::user()->id,
                'address_id'=>$a->id,
                'total'=>Cart::getTotal(),
            ]);
            foreach (Cart::getContent() as $item) {
                $order->products()->attach($order->id, ['quantity' => $item->quantity,'product_id'=>$item->id,'shg_id'=>$item->conditions]);
            }
            Cart::clear();
            return redirect()->route('account');
            
        }
        $cat=$this->cat;
        $dist=$this->dist;
         return view('user.checkout',compact('cat','dist'));
    }

    public function viewcart(){
       // dd(Cart::getContent());
        $cat=$this->cat;
        $dist=$this->dist;
         return view('user.viewcart',compact('cat','dist'));
    }

    public function order(){
       $ord = Order::with('products.shg','products.files')->get();
       dd($ord);
    }
    public function productStatus($id,$status){
       $res=DB::table('order_product')->where('id',$id)->update(['status'=>$status]);
        if($res){
                   $notification = array(
                        'message' => 'Status updated', 
                        'alert-type' => 'success'
                    );
                return back()->with($notification);
            }
            $notification = array(
                        'message' => 'Sorry Status Not updated', 
                        'alert-type' => 'danger'
                    );
         return back()->with($notification);
    }
}
