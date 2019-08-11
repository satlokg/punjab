@extends('layouts.app')

@section('content')
    <div class="col-md-12">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Category
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Category</li>
            </ol>
        </section>
<section class="content">
<div class="row">
  <div class="box col-md-8">
    <div class="box-header with-border">
      <h3 class="box-title">Categories</h3>
      <div class="pull-right">
          <a href="{{route('admin.category.add')}}" class="btn btn-success" title="Add Category">
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
            @foreach($cateories as $key=>$category)
            <tr>
                <td>{{$key+1}}</td>
              <td>{{$category->name}}</td>
              <td>
                  <a href="route('admin.category.add')" class="btn btn-success" title="Add Category">
                      <span class="fa fa-pencil"></span>
                  </a>
                  <a href="route('admin.category.add')" class="btn btn-danger" title="Add Category">
                      <span class="fa fa-bin"></span>
                  </a>
              </td>
            </tr>
           @endforeach
          </table>
    </div>
    {!!$cateories->render()!!}
    </div>
</div>
</section>
    </div>
@endsection