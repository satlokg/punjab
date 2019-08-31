@extends('layouts.user')
@section('banner')
<div class="breadcrumb-area pt-35 pb-35 bg-gray-3">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <ul>
                <li>
                    <a href="#">View Cart</a>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="col-lg-9">
    <div class="shop-area pt-10 pb-10">
    <div class="container">
        <div class="row">
           <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <form method="POST" action="{{ route('cart.update') }}">
                        {{ csrf_field() }}
                    <div class="table-content table-responsive cart-table-content">
                        <table>
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Product Name</th>
                                    <th>Until Price</th>
                                    <th>Qty</th>
                                    <th>Subtotal</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach(Cart::getContent() as $k=>$item)
                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#"><img alt="" class="img img-thumbnail" src="{{url('public/files')}}/{{$item->attributes['img']}}"></a>
                                    </td>
                                    <td class="product-name"><a href="#">{{$item->id}}</a></td>
                                    <td class="product-price-cart"><span class="amount">Rs. {{$item->price}}</span></td>
                                    <td class="product-quantity">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="prod[{{$k}}][quantity]" value="{{$item->quantity}}">

                                            <input type="hidden" name="prod[{{$k}}][id]" value="{{$item->id}}">
                                        </div>
                                    </td>
                                    <td class="product-subtotal">Rs. {{$item->getPriceSum()}}</td>
                                    <td class="product-remove">
                                        <a href="{{route('product.detail',['id'=>$item->id])}}"><i class="fa fa-pencil"></i></a>
                                        <a href="{{route('cart.remove',['id'=>$item->id])}}"><i class="fa fa-times"></i></a>
                                   </td>
                                </tr>
                               @endforeach
                              
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="cart-shiping-update-wrapper">
                                <div class="cart-shiping-update">
                                    <a href="{{route('welcome')}}">Continue Shopping</a>
                                </div>
                                <div class="cart-clear">
                                    <button class="btn btn-sm">Update Cart</button>
                                    <a href="{{route('cart.clear')}}">Clear Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="row">
                    
                    <div class="col-lg-4 col-md-12">
                        <div class="grand-totall">
                            <div class="title-wrap">
                                <h4 class="cart-bottom-title section-bg-gary-cart">Cart Total</h4>
                            </div>
                            <h5>Total products <span>{{Cart::getTotalQuantity()}}</span></h5>
                            <!-- <div class="total-shipping">
                                <h5>Total shipping</h5>
                                <ul>
                                    <li><input type="checkbox"> Standard <span>$20.00</span></li>
                                    <li><input type="checkbox"> Express <span>$30.00</span></li>
                                </ul>
                            </div> -->
                            <h4 class="grand-totall-title">Grand Total  <span>Rs. {{Cart::getTotal()}}</span></h4>
                            <a href="#">Proceed to Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>      
               
</div>


@endsection