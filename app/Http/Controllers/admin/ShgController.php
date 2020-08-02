<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Product;
use App\models\File;
use Auth;
use DB;
use App\models\Category;
use App\models\Order;
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
        $ordersMonth=Order::whereMonth('created_at', '=', date('m'))->get();
        $ordersToday=Order::whereDay('created_at', '=', date('d'))->get();
        $ordersAll=Order::paginate(10);
        $res['total_earning']=Auth::guard('shg')->user()->order_product->sum('sub_total');
        $res['total_order']=Auth::guard('shg')->user()->order_product->sum('quantity');
        $res['total_product']=Auth::guard('shg')->user()->products->count('id');
        //dd($res);
        //$d=$orders->whereDate('created_at', '=', date('d')); dd($d);
        //$q->whereDay('created_at', '=', date('d'));
        // $q->whereMonth('created_at', '=', date('m'));
        // $q->whereYear('created_at', '=', date('Y'));
        return view('shg.dashboard',compact('ordersMonth','ordersToday','ordersAll','res'));
    }

    public function products()
    {
        $products=Product::where('contact',Auth::guard('shg')->user()->contact)->orderBy('id','desc')->paginate(10); 
        return view('shg.products',compact('products'));
    }

    public function productsAdd(Request $r)
    {
        if(!empty($r->post())){
            //dd($r->dt);
             $this->validate($r, [
                'pname' => 'required',
                'oname' => 'required',
                'price' => 'required',
                'category_id' => 'required',
                'pdesc' => 'required',
                'filenames' => 'required',
                'filenames.*' => 'mimes:jpg,jpeg,png,svg,gif'
                ],[
                "pname.required" => ' The Product name field is required.',
                "oname.required" => ' The owner name field is required.',
                "price.required" => ' The price name field is required.',
                "pdesc.required" => ' The description name field is required.',
                "category_id.required" => ' The category name field is required.',
                "filenames.required" => ' The product pic field is required.',
            ]);
             if ($r->id) {
                $product= Product::find($r->id);
             }else{
                $product= new Product;
             }
             
             $product->category_id =$r->category_id;
             $product->pname =$r->pname;
             $product->pdesc =$r->pdesc;
             $product->gname =Auth::guard('shg')->user()->id;;
             $product->pmaterial =$r->pmaterial;
             $product->price =$r->price;
             $product->unit =$r->unit;
             $product->oname =$r->oname;
             $product->status =$r->status;
             $product->contact =Auth::guard('shg')->user()->contact;
             $product->shg_id =Auth::guard('shg')->user()->id;
             $product->village_id =Auth::guard('shg')->user()->village_id;
             $product->block_id =Auth::guard('shg')->user()->block_id;
             $product->district_id =Auth::guard('shg')->user()->district_id;
             $product->save();
        //$files=new File;

        if($r->hasfile('filenames'))
         {
            foreach($r->filenames as $k=>$file)
            {
                $name=$file->getClientOriginalName();
                $file->move(public_path().'/files/', $name);  
                $files['filename'] = $name;
                $files['product_id'] = $product->id;  
                File::Create($files);
                //$files->save();
            }
         }
        if($product){
                   $notification = array(
                        'message' => 'Product successfully Aded', 
                        'alert-type' => 'success'
                    );
                return redirect('shg/products')->with($notification);
            }
        }
        $categories=Category::all();
        return view('shg.product.add',compact('categories'));
    }

    public function productsEdit($id){
        $product = Product::find($id); //dd($product);
        $categories=Category::all();
        return view('shg.product.edit',compact('product','categories'));
    }
}
