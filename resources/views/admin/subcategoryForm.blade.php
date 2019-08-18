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
                <li class="active">Add Sub Category</li>
            </ol>
        </section>
<section class="content">
<div class="row">
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Add Sub Categories For {{$cat->name}}</h3>
      <div class="pull-right">
          <a href="{{route('admin.category')}}" class="btn btn-success" title="Add Category">
              <span class="fa fa-eye"></span>
          </a>
      </div>
    </div>
    <div class="box-body table-responsive no-padding">
          <div class="col-md-8">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <!-- form start -->
            <form class="form-horizontal" action="{{route('admin.subcategory.post')}}" method="post" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="category_id" value="{{$cat->id}}">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Sub Category Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Name">
                  </div>
                  @if ($errors->has('name'))
                                <span class="invalid-feedback text-danger" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Sub Category Pic</label>

                  <div class="col-sm-10">
                    <input type="file" class="form-control{{ $errors->has('pic') ? ' is-invalid' : '' }}" name="pic" value="{{ old('pic') }}" id="pic" placeholder="Please Select Pic">
                  </div>
                  @if ($errors->has('pic'))
                                <span class="invalid-feedback text-danger" role="alert">
                                    <strong>{{ $errors->first('pic') }}</strong>
                                </span>
                            @endif
                </div>
               
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Description</label>
                  <div class="col-sm-10">
                  <textarea class="form-control" rows="3" name="desc" placeholder="Enter ..."></textarea>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Add</button>
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