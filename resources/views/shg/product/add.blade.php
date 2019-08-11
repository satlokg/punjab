@extends('layouts.shg')

@section('content')
 <script>
        $(document).ready(function() { $("#e2").select2(); });
    </script>
<div class="container-fluid">
<div class="col">
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Product
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add Product</li>
    </ol>
</section>
<section class="content">
    <div class="row">
    <div class="box">
    <form class="form-horizontal" action="{{route('shg.product.post')}}" method="post" enctype="multipart/form-data">
              @csrf
    <div class="box-header with-border">
      <h3 class="box-title">Add Product</h3>
      <div class="pull-right">
          <a href="{{route('shg.products')}}" class="btn btn-success" title="Add Category">
              <span class="fa fa-eye"></span>
          </a>
          &nbsp;
          <button type="submit" class="btn btn-info pull-right">Save</button>
      </div>
    </div>
    <div class="box-body with-border">

    <div class="col-sm-5">

      <div class="form-group">
        <label>Category</label>
        <select class="form-control" id="e2" name="dt['general_detail']['category_id']">
          <option>Select Category</option>
          @foreach($categories as $cat)
          <option value="{{$cat->id}}">{{$cat->name}}</option>
          @endforeach
        </select>
      </div>

      <div class="form-group">
        <label>Product Name</label>
        <input type="text" class="form-control" placeholder="Enter Product name" name="dt['general_detail']['pname']">
      </div>

      <div class="form-group">
        <label>Description</label>
       <textarea class="form-control" name="dt['general_detail']['pdesc']" rows="4"></textarea>
      </div>

      <div class="form-group">
        <label>Material/Ingredient Used</label>
       <textarea class="form-control" name="dt['general_detail']['pmaterial']" rows="4"></textarea>
      </div>

      <div class="form-group">
        <div class="col-md-9">
        <label>Price / unit</label>
        <input type="text" class="form-control" placeholder="Price per unit" name="dt['general_detail']['price']">
        </div>
        <div class="col-md-3">
          <label>unit</label>
          <select class="form-control" name="dt['general_detail']['unit']">
            <option>Kg</option>
            <option>Ltr</option>
            <option>piece</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label>Owner Name</label>
        <input type="text" class="form-control" placeholder="Enter Product name" name="dt['general_detail']['oname']">
      </div>

      <div class="form-group">
        <label>Status</label>
          <select class="form-control" name="dt['general_detail']['status']">
            <option>Available</option>
            <option>Not Available</option>
          </select>
      </div>


    </div>

   <div class="col-sm-1"></div>
    <div class="col-sm-6">
      <div class="row">
      <h3 class="box-title">Add Other Details</h3>
      <div class="pull-right">
         <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>
      </div>
      </div>
      <div class="after-add-more">
          <div class="form-group">
            <label>Column Name</label>
              <input class="form-control" type="text" name="dt['other_detail']['column_name'][]">
          </div>
          <div class="form-group">
            <label>Description</label>
              <textarea class="form-control" name="dt['other_detail']['col_desc'][]"></textarea>
          </div>
        </div>
        <div class="copy hide">
          <div class="control-group" style="margin-top:10px">
            <div class="form-group">
            <label>Column Name</label>
              <input class="form-control" type="text" name="dt['other_detail']['column_name'][]">
          </div>
          <div class="form-group">
            <label>Description</label>
              <textarea class="form-control" name="dt['other_detail']['col_desc'][]"></textarea>
          </div>
            <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
          </div>
        </div>
    </div>

  </div>
   <div class="box-body with-border">

    <div class="col-sm-12">
      <h3>Product Pic</h3>
    </div>

    </div>   
          

        </form>

    </div>
</div>
</section>
</div>
</div>
<script type="text/javascript">


    $(document).ready(function() {


      $(".add-more").click(function(){ 
          var html = $(".copy").html();
          $(".after-add-more").after(html);
      });


      $("body").on("click",".remove",function(){ 
          $(this).parents(".control-group").remove();
      });


    });


</script>
@endsection