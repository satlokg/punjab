@extends('layouts.shg')

@section('content')
    <div class="col">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Products
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Products</li>
            </ol>
        </section>
<section class="content">
<div class="row">
  <div class="box col-md-12">
    <div class="box-header with-border">
      <h3 class="box-title">Products</h3>
      <div class="pull-right">
          <a href="{{route('shg.product.add')}}" class="btn btn-success" title="Add Product">
              <span class="fa fa-plus"></span>
          </a>
      </div>
    </div>
    <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Description</th>
              <th>Price</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
            @foreach($products as $key=>$product)
            <tr>
                <td>{{$key+1}}</td>
              <td>{{$product->pname}}</td>
              <td>{{$product->pdesc}}</td>
              <td>{{$product->price}} / {{$product->unit}}</td>
              <td>{{$product->status}}</td>
              <td>
                  <a href="route('admin.product.add')" class="btn btn-success" title="Add Product">
                      <span class="fa fa-pencil"></span>
                  </a>
                  <a href="route('admin.product.add')" class="btn btn-danger" title="Delete Product">
                      <span class="fa fa-bin"></span>
                  </a>
              </td>
            </tr>
           @endforeach
          </table>
    </div>
    {!!$products->render()!!}
    </div>
</div>
</section>
    </div>
@endsection