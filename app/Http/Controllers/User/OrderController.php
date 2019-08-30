<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use App\models\Order;

class OrderController extends Controller
{
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
        $res=OrderProduct::where('shg_id',Auth::guard('shg')->user()->id)->get();
        dd($res);
        //$d=$orders->whereDate('created_at', '=', date('d')); dd($d);
        //$q->whereDay('created_at', '=', date('d'));
        // $q->whereMonth('created_at', '=', date('m'));
        // $q->whereYear('created_at', '=', date('Y'));
        return view('shg.dashboard',compact('ordersMonth','ordersToday','ordersAll'));
    }

    public function order()
    {
        $title="All";
        $orders=Order::paginate(10); 
        return view('user.order',compact('orders','title'));
    }

    public function today()
    {
        $title="Todays";
        $orders=Order::whereDay('created_at', '=', date('d'))->paginate(10); 
        return view('user.order',compact('orders','title'));
    }

    public function month()
    {
        $title="This Month";
        $orders=Order::whereMonth('created_at', '=', date('m'))->paginate(10); 
        return view('user.order',compact('orders','title'));
    }

    public function delivered()
    {
        $title="Delivered";
        $orders=Order::paginate(10); 
        return view('user.delivered_order',compact('orders','title'));
    }

    public function pending()
    {
        $title="Pending";
        $orders=Order::get(); 
        return view('user.pending_order',compact('orders','title'));
    }

    public function cancel()
    {
        $title="Canceled";
        $orders=Order::get(); //dd($orders[1]->pendingproducts);
        return view('user.canceled_order',compact('orders','title'));
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
