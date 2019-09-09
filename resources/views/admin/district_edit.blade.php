@extends('layouts.app')

@section('content')
    <div class="col-md-12">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                District
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Add District</li>
            </ol>
        </section>
<section class="content">
<div class="row">
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Add Categories</h3>
      <div class="pull-right">
          <a href="{{route('admin.district')}}" class="btn btn-success" title="Add District">
              <span class="fa fa-eye"></span>
          </a>
      </div>
    </div>
    <div class="box-body table-responsive no-padding">
          <div class="col-md-8">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <!-- form start -->
            <form class="form-horizontal" action="{{route('admin.district.post')}}" method="post" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="id" value="{{$districts->id}}">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">District Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $districts->name }}" placeholder="Name">
                  </div>
                  @if ($errors->has('name'))
                                <span class="invalid-feedback text-danger" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                </div>
               
               <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">District Password</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ $districts->password }}" placeholder="Password">
                  </div>
                  @if ($errors->has('password'))
                                <span class="invalid-feedback text-danger" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                </div>
                 
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Update</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
         
        </div>
    </div>
    </div>
</div>
</section>
    </div>
@endsection