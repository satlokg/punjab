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
                <li class="active">User</li>
            </ol>
        </section>
<section class="content">
<div class="row">
  <div class="box col-md-8">
    <div class="box-header with-border">
      <h3 class="box-title">Users</h3>
      <div class="pull-right">
          <!-- <a href="{{route('admin.district.add')}}" class="btn btn-success" title="Add District">
              <span class="fa fa-plus"></span>
          </a> -->
      </div>
    </div>
    <div class="box-body table-responsive no-padding">
         
    </div>

    </div>
</div>
</section>
    </div>
  </div>
@endsection