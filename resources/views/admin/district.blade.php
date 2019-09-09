@extends('layouts.app')

@section('content')
    <div class="col">
      <div class="container-fluid">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                District
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">District</li>
            </ol>
        </section>
<section class="content">
<div class="row">
  <div class="box col-md-8">
    <div class="box-header with-border">
      <h3 class="box-title">Categories</h3>
      <div class="pull-right">
          <a href="{{route('admin.district.add')}}" class="btn btn-success" title="Add District">
              <span class="fa fa-plus"></span>
          </a>
      </div>
    </div>
    <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Total Product</th>
              <th>Total Earning</th>
              <th>Total order</th>
              <th>Total Shg</th>
              <th>Action</th>
            </tr>
            @foreach($districts as $key=>$district)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$district->name}}</td>
                <td>{{$district->products->count('id')}}</td>
                <td>{{$district->order_product->sum('sub_total')}}</td>
                <td>{{$district->order_product->sum('quantity')}}</td>
                <td>{{$district->shg->count('id')}}</td>
              
              <td>
                  <a href="{{route('admin.district.edit',['district_id'=>$district->id])}}" class="btn btn-success" title="Add Category">
                      <span class="fa fa-pencil"></span>
                  </a>
                  <!-- <a href="route('admin.category.add')" class="btn btn-danger" title="Add Category">
                      <span class="fa fa-trash"></span>
                  </a> -->
                  <a target="_blank" href="{{route('admin.shg.list',['district_id'=>$district->id])}}" class="btn btn-info" title="Add Category">
                      Shg List
                  </a>
              </td>
            </tr>
           @endforeach
          </table>
    </div>
    {!!$districts->render()!!}
    </div>
</div>
</section>
    </div>
  </div>
@endsection