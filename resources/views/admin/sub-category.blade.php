@extends('layouts.app')

@section('content')
    <div class="col">
      <div class="container-fluid">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Category
                <small>Control panel </small>

            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Sub Category</li>
            </ol>
        </section>
<section class="content">
<div class="row">
  <div class="box col-md-8">
    <div class="box-header with-border">
      <h3 class="box-title"> Sub Categories <span class="text text-success">({{$subcats->name}})</span></h3>
     
      <div class="pull-right">
          <a href="{{route('admin.subcategory.add',['id'=>$subcats->id])}}" class="btn btn-success" title="Add Sub Category">
              <span class="fa fa-plus"></span>
          </a>
      </div>
    </div>
    <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Action</th>
            </tr>
            @foreach($subcats->sub_categories as $key=>$category)
            <tr>
                <td>{{$key+1}}</td>
              <td>{{$category->name}}</td>
              <td>
                  <a href="{{route('admin.subcategory.edit',['id'=>$category->id,'cat'=>$category->category_id])}}" class="btn btn-success" title="Add Category">
                      <span class="fa fa-pencil"></span> Edit
                  </a>
                  <!-- <a href="route('admin.category.add')" class="btn btn-danger" title="Add Category">
                      <span class="fa fa-trash"></span> Delete
                  </a>
                  <a href="{{route('admin.subcategory',['cat'=>$category->id])}}" class="btn btn-info" title="Add Category">
                      <span class="fa fa-plus"></span> Sub Category
                  </a> -->
              </td>
            </tr>
           @endforeach
          </table>
    </div>
    </div>
</div>
</section>
    </div>
  </div>
@endsection