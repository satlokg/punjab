@extends('layouts.district')

@section('content')
 <script>
        $(document).ready(function() { $("#e2").select2(); });
    </script>
<div class="container-fluid">
<div class="col">
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Block
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add Block</li>
    </ol>
</section>
<section class="content">
    <div class="row">
    <div class="box">
    <form class="form-horizontal" action="{{route('block.update',['id'=>$block->id])}}" method="put" enctype="multipart/form-data">
              @csrf
    <div class="box-header with-border">
      <h3 class="box-title">Add Block</h3>
      <div class="pull-right">
          <a href="{{route('block.index')}}" class="btn btn-success" title="Add Category">
              <span class="fa fa-eye"></span>
          </a>
          &nbsp;
          <button type="submit" class="btn btn-info pull-right">Save</button>
      </div>
    </div>
    <div class="box-body with-border">

    <div class="col-sm-5">

      

      <div class="form-group">
        <label>Block Name</label>
        <input type="text" class="form-control" placeholder="Enter block name" value="{{$block->block_name}}" name="block_name">
        @if ($errors->has("block_name"))
                                <span class="invalid-feedback text-danger" role="alert">
                                    <strong>{{ $errors->first("block_name") }}</strong>
                                </span>
                            @endif
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