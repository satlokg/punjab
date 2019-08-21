<?php

namespace App\Http\Controllers\cart;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Product;
use Cart;

class CartController extends Controller
{
    public function index()
    {
    	//\Cart::remove();
        $items = [];

            Cart::getContent()->each(function($item) use (&$items)
            {
            	//Cart::remove($item->id);
                $items[] = $item;
                //dd($item->id);
            });
            
            dd($items);
    }
public function remove($id)
    {
       Cart::remove($id);
       $notification = array(
                        'message' => 'Product successfully Removed', 
                        'alert-type' => 'success'
                    );
        return back()->with($notification);

    }
    public function add($id)
    {
    	$prd=Product::where('id',$id)->with('files')->first();
    	//dd($prd);
    	$id = $prd->id;
        $name = $prd->pname;
        $price = $prd->price;
        $qty = 1;
        $img = $prd->files[0]->filename;

        // $customAttributes = [
        //     'color_attr' => [
        //         'label' => 'red',
        //         'price' => 10.00,
        //     ],
        //     'size_attr' => [
        //         'label' => 'xxl',
        //         'price' => 15.00,
        //     ]
        // ];

        $item = Cart::add($id, $name, $price, $qty, $img);
        $notification = array(
                        'message' => 'Product successfully Aded', 
                        'alert-type' => 'success'
                    );
        return back()->with($notification);
        return response(array(
            'success' => true,
            'data' => $item,
            'message' => "item added."
        ),201,[]);
    }

    public function clear()
    {
       Cart::clear();
       $notification = array(
                        'message' => 'Product successfully Cleared', 
                        'alert-type' => 'success'
                    );
        return back()->with($notification);

    }

    public function updateCart(Request $r)
    {
    	$pro=$r->all(); 
       foreach ($pro['prod'] as $pr) { //dd($value);
       Cart::update($pr['id'], array(
		  'quantity' => $pr['quantity'], 
		));
       }
       $notification = array(
                        'message' => 'Product successfully Cleared', 
                        'alert-type' => 'success'
                    );
        return back()->with($notification);

    }
}
