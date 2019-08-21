@extends('layouts.user')
@section('banner')
<div class="breadcrumb-area pt-35 pb-35 bg-gray-3">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <ul>
                <li>
                    <a href="#">Checkout</a>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="col-lg-9">
    <form method="POST" action="{{ route('final.checkout') }}">
                                      {{ csrf_field() }}
    <div class="shop-area pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="billing-info-wrap">
                    <h3>Billing Details</h3>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="billing-info mb-20">
                                <label>First Name</label>
                                <input type="text" value="{{Auth::user()->first_name}}" name="billing[first_name]">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="billing-info mb-20">
                                <label>Last Name</label>
                                <input type="text" value="{{Auth::user()->last_name}}" name="billing[last_name]">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="billing-info mb-20">
                                <label>Company Name</label>
                                <input type="text" name="billing[company_name]">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="billing-select mb-20">
                                <label>Country</label>
                                <input type="text" name="billing[country]">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="billing-info mb-20">
                                <label>Street Address</label>
                                <input class="billing-address" placeholder="House number and street name" type="text" name="billing[street]">
                                <input placeholder="Apartment, suite, unit etc." type="text" name="billing[suit]">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="billing-info mb-20">
                                <label>Town / City</label>
                                <input type="text" name="billing[city]">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="billing-info mb-20">
                                <label>State / County</label>
                                <input type="text" name="billing[state]">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="billing-info mb-20">
                                <label>Postcode / ZIP</label>
                                <input type="text" name="billing[zip]">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="billing-info mb-20">
                                <label>Phone</label>
                                <input type="text" name="billing[phone]">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="billing-info mb-20">
                                <label>Email Address</label>
                                <input type="text" value="{{Auth::user()->email}}" name="billing[email]">
                            </div>
                        </div>
                    </div>
                    <!-- <div class="checkout-account mb-50">
                        <input class="checkout-toggle2" type="checkbox" name="account[created]">
                        <span>Create an account?</span>
                    </div>
                    <div class="checkout-account-toggle open-toggle2 mb-30">
                        <input placeholder="Email address" type="email" name="account[email]">
                        <input placeholder="Password" type="password" name="account[password]">
                       
                    </div> -->
                    <div class="additional-info-wrap">
                        <h4>Additional information</h4>
                        <div class="additional-info">
                            <label>Order notes</label>
                            <textarea placeholder="Notes about your order, e.g. special notes for delivery. " name="message"></textarea>
                        </div>
                    </div>
                    <div class="checkout-account mt-25">
                        <input class="checkout-toggle" type="checkbox"  name="shipping[ship]">
                        <span>Ship to a different address?</span>
                    </div>
                    <div class="different-address open-toggle mt-30">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20">
                                    <label>First Name</label>
                                    <input type="text" name="shipping[first_name]" value="{{Auth::user()->first_name}}">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20">
                                    <label>Last Name</label>
                                    <input type="text" name="shipping[last_name]" value="{{Auth::user()->last_name}}">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="billing-info mb-20">
                                    <label>Company Name</label>
                                    <input type="text" name="shipping[cname]">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="billing-select mb-20">
                                    <label>Country</label>
                                    <input type="text"  name="shipping[country]">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="billing-info mb-20">
                                    <label>Street Address</label>
                                    <input class="billing-address" placeholder="House number and street name" type="text"  name="shipping[street]">
                                    <input placeholder="Apartment, suite, unit etc." type="text"  name="shipping[suit]">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="billing-info mb-20">
                                    <label>Town / City</label>
                                    <input type="text" name="shipping[city]">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20">
                                    <label>State / County</label>
                                    <input type="text" name="shipping[state]">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20">
                                    <label>Postcode / ZIP</label>
                                    <input type="text" name="shipping[zip]">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20">
                                    <label>Phone</label>
                                    <input type="text" name="shipping[phone]">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20">
                                    <label>Email Address</label>
                                    <input type="text" name="shipping[email]" value="{{Auth::user()->email}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="your-order-area">
                    <h3>Your order</h3>
                    <div class="your-order-wrap gray-bg-4">
                        <div class="your-order-product-info">
                            <div class="your-order-top">
                                <ul>
                                    <li>Product</li>
                                    <li>Total</li>
                                </ul>
                            </div>
                            <div class="your-order-middle">
                                <ul>
                                    @foreach(Cart::getContent() as $item)
                                    <li><span class="order-middle-left">{{$item->name}}  X  {{$item->quantity}}</span> <span class="order-price">Rs. {{$item->getPriceSum()}} </span></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="your-order-bottom">
                                <ul>
                                    <li class="your-order-shipping">Shipping</li>
                                    <li>Free shipping</li>
                                </ul>
                            </div>
                            <div class="your-order-total">
                                <ul>
                                    <li class="order-total">Total</li>
                                    <li>Rs. {{Cart::getSubTotal()}}</li>
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                    <div class="Place-order mt-25">
                        <button type="submit" class="btn-hover">Place Order</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>      
</form>     
</div>


@endsection