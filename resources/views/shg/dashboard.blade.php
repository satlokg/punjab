@extends('layouts.shg')

@section('content')
    <section class="content-header">
        <h1>
            Dashboard
            <small>Version 2.0</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">CPU Traffic</span>
                        <span class="info-box-number">90<small>%</small></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Likes</span>
                        <span class="info-box-number">41,410</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Sales</span>
                        <span class="info-box-number">760</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">New Members</span>
                        <span class="info-box-number">2,000</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Today's Orders</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <div class="btn-group">
                                <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-wrench"></i></button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-content table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Product Name</th>
                                    <th>Until Price</th>
                                    <th>Qty</th>
                                    <th>Subtotal</th>
                                    <th>Buyer Detail</th>
                                    <th>Status</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                             @foreach($ordersMonth as $items)
                            <tbody>
                               
                                 @foreach($items->products as $k=>$item)
                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#"><img src="{{url('public/files')}}/{{$item->files[0]->filename}}" height="50" class="img"></a>
                                    </td>
                                    <td class="product-name"><a href="#">{{$item->pname}}</a></td>
                                    <td class="product-price-cart"><span class="amount">Rs. {{$item->price}}</span></td>
                                    <td class="product-quantity">
                                        <span class="amount">{{$item->pivot->quantity}}</span>
                                    </td>
                                    <td class="product-subtotal">Rs. {{$item->pivot->quantity*$item->price}}</td>
                                    <td class="product-subtotal">
                                        {{$items->address->first_name}} {{$items->address->last_name}}<br>
                                        {{$items->address->company_name}}
                                        {{$items->address->suit}}
                                        {{$items->address->street}}
                                        {{$items->address->city}}
                                        {{$items->address->state}}
                                        {{$items->address->country}}
                                        {{$items->address->zip}}<br>
                                        {{$items->address->email}}<br>
                                        {{$items->address->phone}}
                                    </td>
                                    @if($item->pivot->status==0)
                                    <td class="product-subtotal">Pending</td>
                                    @elseif($item->pivot->status==1)
                                    <td class="product-subtotal">Approved</td>
                                    @elseif($item->pivot->status==2)
                                    <td class="product-subtotal">Dispatched</td>
                                    @elseif($item->pivot->status==3)
                                    <td class="product-subtotal">Delivered</td>
                                    @elseif($item->pivot->status==4)
                                    <td class="product-subtotal">Canceled</td>
                                    @endif
                                    <td class="product-remove">
                                        <a class="btn btn-primary btn-sm btn-rounded" href="{{route('product.status',['id'=>$item->pivot->id,'status'=>1])}}"> {!!$item->pivot->status==1 ?'<i class="fa fa-check-square-o" aria-hidden="true"></i>' : ''!!} Approve</a>
                                        <a class="btn btn-info btn-sm btn-rounded" href="{{route('product.status',['id'=>$item->pivot->id,'status'=>2])}}">{!!$item->pivot->status==2 ?'<i class="fa fa-check-square-o" aria-hidden="true"></i>' : ''!!} Dispatche</a>
                                        <a class="btn btn-success btn-sm btn-rounded" href="{{route('product.status',['id'=>$item->pivot->id,'status'=>3])}}">{!!$item->pivot->status==3 ?'<i class="fa fa-check-square-o" aria-hidden="true"></i>' : ''!!} Delivered</a>
                                        <a class="btn btn-danger btn-sm btn-rounded" href="{{route('product.status',['id'=>$item->pivot->id,'status'=>4])}}">{!!$item->pivot->status==4 ?'<i class="fa fa-check-square-o" aria-hidden="true"></i>' : ''!!} Cancel</a>
                                   </td>
                                </tr>
                               @endforeach
                               
                              
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- ./box-body -->
                    
                    <!-- /.box-footer -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Main row -->
       
        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection
