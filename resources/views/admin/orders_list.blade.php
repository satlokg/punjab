@extends('layouts.app')

@section('content')
    <div class="col">
      <div class="container-fluid">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                User
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">User Orders</li>
            </ol>
        </section>
      <section class="content">
      <div class="col">
        <h3>Order Details</h3>
        @foreach($orders as $order)
          <div class="card pb-35">
          <div class="card-header text-white bg-primary">
            OrderNo: <strong>{{$order->id}},</strong>   Created At: <strong>{{$order->created_at}},</strong>   Total Amount: <strong>Rs.{{$order->total}}</strong>
          </div>
          <div class="card-body">
            <div class="table-content table-responsive cart-table-content">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Product Name</th>
                        <th>Until Price</th>
                        <th>Qty</th>
                        <th>Subtotal</th>
                        <th>Sold By</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
              @foreach($order->product as $product)
              <tr>
                    <td class="product-thumbnail">
                        <a href="#"><img alt="" class="" src="{{url('public/files')}}/{{$product->files[0]->filename}}"  height="50" ></a>
                    </td>
                    <td class="product-name"><a href="#">{{$product->pname}}</a></td>
                    <td class="product-price-cart"><span class="amount">Rs. {{$product->price}}</span></td>
                    <td class="product-quantity"><span class="amount"> {{$product->pivot->quantity}}</span></td>
                    <td class="product-subtotal">Rs.{{$product->price * $product->pivot->quantity}} </td>
                    <td class="product-subtotal"><a href="{{route('shg.store',['s'=>$product->shg->name])}}" >{{$product->shg->name}}</a> </td>
                    <td class="product-remove">
                      @if($product->pivot->status==0)
                      <span class="badge badge-danger">pending</span>
                      @elseif($product->pivot->status==1)
                      <span class="badge badge-info">Approved</span>
                      @elseif($product->pivot->status==2)
                      <span class="badge badge-danger">Dispached</span>
                      @elseif($product->pivot->status==3)
                      <span class="badge badge-danger">Delivered</span>
                      @elseif($product->pivot->status==4)
                        <span class="badge badge-danger">Canceled</span>
                        @endif
                   </td>
                </tr>
              @endforeach
              </tbody>
                  </table>
              </div>

          </div>
        </div>
        <br>
        @endforeach
                     
      </div>
       {!!$orders->render()!!}
      </section>
    </div>
  </div>
@endsection