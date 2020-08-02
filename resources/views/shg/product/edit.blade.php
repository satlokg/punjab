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
              <input type="hidden" name="id" value="{{$product->id}}">
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
        <select class="form-control" id="" name="category_id">
          <option value="">Select Category</option>
          @foreach($categories as $cat)
          <option value="{{$cat->id}}" {{ $product->category_id == $cat->id?'selected':''}}>{{$cat->name}}</option>
          @endforeach
        </select>
        @if ($errors->has("category_id"))
                                <span class="invalid-feedback text-danger" role="alert">
                                    <strong>{{ $errors->first("category_id") }}</strong>
                                </span>
                            @endif
      </div>

      <div class="form-group">
        <label>Product Name</label>
        <input type="text" class="form-control" placeholder="Enter Product name" value="{{$product->pname}}" name="pname">
        @if ($errors->has("pname"))
                                <span class="invalid-feedback text-danger" role="alert">
                                    <strong>{{ $errors->first("pname") }}</strong>
                                </span>
                            @endif
      </div>

      <div class="form-group">
        <label>Description</label>
       <textarea class="form-control" name="pdesc" rows="4"> {{$product->pdesc}}</textarea>
       @if ($errors->has("pdesc"))
                                <span class="invalid-feedback text-danger" role="alert">
                                    <strong>{{ $errors->first("pdesc") }}</strong>
                                </span>
                            @endif
      </div>

      <div class="form-group">
        <label>Material/Ingredient Used</label>
       <textarea class="form-control" name="pmaterial" rows="4"> {{$product->pmaterial}}</textarea>
       @if ($errors->has("pmaterial"))
                                <span class="invalid-feedback text-danger" role="alert">
                                    <strong>{{ $errors->first("pmaterial") }}</strong>
                                </span>
                            @endif
      </div>

      <div class="form-group">
        <div class="col-md-9">
        <label>Price / unit</label>
        <input type="text" class="form-control" placeholder="Price per unit" value="{{$product->price}}" name="price">
        @if ($errors->has("price"))
                                <span class="invalid-feedback text-danger" role="alert">
                                    <strong>{{ $errors->first("price") }}</strong>
                                </span>
                            @endif
        </div>
        <div class="col-md-3">
          <label>unit</label>
          <select class="form-control" name="unit">
            <option {{ $product->unit == 'Kg'?'selected':''}}>Kg</option>
            <option {{ $product->unit == 'Ltr'?'selected':''}}>Ltr</option>
            <option {{ $product->unit == 'piece'?'selected':''}}>piece</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label>Owner Name</label>
        <input type="text" class="form-control" placeholder="Enter Product name" value="{{$product->oname}}" name="oname">
        @if ($errors->has("oname"))
                                <span class="invalid-feedback text-danger" role="alert">
                                    <strong>{{ $errors->first("oname") }}</strong>
                                </span>
                            @endif
      </div>

      <div class="form-group">
        <label>Status</label>
          <select class="form-control" name="status">
            <option {{ $product->status == 'Available'?'selected':''}}>Available</option>
            <option {{ $product->status == 'Not Available'?'selected':''}}>Not Available</option>
          </select>

      </div>


    </div>

   <div class="col-sm-1"></div>
   <!--  <div class="col-sm-6">
      <div class="row">
      <h3 class="box-title">Add Other Details</h3>
      <div class="pull-right">
         <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>
      </div>
      </div>
      <div class="after-add-more">
          <div class="form-group">
            <label>Column Name</label>
              <input class="form-control" type="text" name="dt['column_name'][]">
          </div>
          <div class="form-group">
            <label>Description</label>
              <textarea class="form-control" name="dt['col_desc'][]"></textarea>
          </div>
        </div>
        <div class="copy hide">
          <div class="control-group" style="margin-top:10px">
            <div class="form-group">
            <label>Column Name</label>
              <input class="form-control" type="text" name="dt['column_name'][]">
          </div>
          <div class="form-group">
            <label>Description</label>
              <textarea class="form-control" name="dt['col_desc'][]"></textarea>
          </div>
            <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
          </div>
        </div>
    </div> -->

  </div>
   <div class="box-body with-border">

    <div class="col-sm-12">
      <h3>Product Pic</h3>
      <div class="input-group hdtuto control-group lst increment" >

      <input type="file" name="filenames[]" class="myfrm form-control">

      <div class="input-group-btn"> 

        <button class="btn btn-success" type="button"><i class="fldemo glyphicon glyphicon-plus"></i>Add</button>

      </div>

    </div>
@if ($errors->has("filenames"))
                                <span class="invalid-feedback text-danger" role="alert">
                                    <strong>{{ $errors->first("filenames") }}</strong>
                                </span>
                            @endif
    <div class="clone hide">

      <div class="hdtuto control-group lst input-group" style="margin-top:10px">

        <input type="file" name="filenames[]" class="myfrm form-control">

        <div class="input-group-btn"> 

          <button class="btn btn-danger remove" type="button"><i class="fldemo glyphicon glyphicon-remove"></i> Remove</button>

        </div>

      </div>

    </div>
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
<script type="text/javascript">

    $(document).ready(function() {

      $(".btn-success").click(function(){ 

          var lsthmtl = $(".clone").html();

          $(".increment").after(lsthmtl);

      });

      $("body").on("click",".btn-danger",function(){ 

          $(this).parents(".hdtuto control-group lst").remove();

      });

    });

</script>
@endsection