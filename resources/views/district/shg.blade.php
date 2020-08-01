@extends('layouts.district')

@section('content')
    <div class="col">
      <div class="container-fluid">
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
  <div class="box col-md-12">
    <div class="box-header with-border">
      <h3 class="box-title">Categories</h3>
      <div class="pull-right">
          <a href="{{route('district.shg.add')}}" class="btn btn-success" title="Add Category">
              <span class="fa fa-plus"></span>
          </a>
      </div>
    </div>
    <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Contact</th>
              <th>Village</th>
              <th>Block</th>
              <th>District</th>
              <th>Action</th>
            </tr>
            @foreach($shgs as $key=>$shg)
            <tr>
                <td>{{$key+1}}</td>
              <td>{{$shg->name}}</td>
              <td>{{$shg->contact}}</td>
              <td>{{$shg->village_name}}</td>
              <td>{{$shg->block_name}}</td>
              <td>{{$shg->dname}}</td>
              <td>
                  <a href="{{route('district.shg.add')}}" class="btn btn-success" title="Add Category">
                      <span class="fa fa-pencil"></span>
                  </a>
                  <!-- <a href="route('admin.category.add')" class="btn btn-danger" title="Add Category">
                      <span class="fa fa-trash"></span>
                  </a> -->
                  <!-- <a href="route('admin.category.add')" class="btn btn-info" title="Add Category">
                      Reports
                  </a> -->
              </td>
            </tr>
           @endforeach
          </table>
    </div>
    {!!$shgs->render()!!}
    </div>
</div>
</section>
    </div>
  </div>
@endsection