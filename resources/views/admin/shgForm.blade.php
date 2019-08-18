@extends('layouts.app')
@section('js')
<script>
        $(document).ready(function() { $("#e1").select2(); });
        $(document).ready(function() { $("#e2").select2(); });
        $(document).ready(function() { $("#e3").select2(); });
</script>
@endsection
@section('content')
    <div class="col-md-12">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Shg
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Add Shg</li>
            </ol>
        </section>
<section class="content">
<div class="row">
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Add Shg</h3>
      <div class="pull-right">
          <a href="{{route('admin.district')}}" class="btn btn-success" title="Add Shg">
              <span class="fa fa-eye"></span>
          </a>
      </div>
    </div>
    <div class="box-body table-responsive no-padding">
          <div class="col-md-8">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <!-- form start -->
            <form class="form-horizontal" action="{{route('admin.shg.post')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="box-body">

                <div class="form-group">
                  <label  class="col-sm-4 control-label"> Select District</label>

                  <div class="col-sm-8">
                    <select id="e1" class="form-control{{ $errors->has('district_id') ? ' is-invalid' : '' }}" name="district_id" onchange="populateBlock();">
                      <option value="">Select District</option>
                      @foreach($dist as $d)
                          <option value="{{$d->id}}" {{$d->id==old('district_id')?"selected":""}}>{{$d->name}}</option>
                      @endforeach
                    </select>
                  </div>
                  @if ($errors->has('district_id'))
                                <span class="invalid-feedback text-danger" role="alert">
                                    <strong>{{ $errors->first('district_id') }}</strong>
                                </span>
                            @endif
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label"> Select Block</label>

                  <div class="col-sm-8">
                    <select id="e2" class="form-control{{ $errors->has('block_id') ? ' is-invalid' : '' }}" name="block_id" onchange="populateVill();">
                      <option value="">Select Block</option>
                      <optgroup id="block"></optgroup>
                    </select>
                  </div>
                  @if ($errors->has('block_id'))
                                <span class="invalid-feedback text-danger" role="alert">
                                    <strong>{{ $errors->first('block_id') }}</strong>
                                </span>
                            @endif
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label"> Select Village</label>

                  <div class="col-sm-8">
                    <select id="e3" class="form-control{{ $errors->has('village_id') ? ' is-invalid' : '' }}" name="village_id">
                      <option value="">Select Village</option>
                      <optgroup id="vill"></optgroup>
                    </select>
                  </div>
                  @if ($errors->has('village_id'))
                                <span class="invalid-feedback text-danger" role="alert">
                                    <strong>{{ $errors->first('village_id') }}</strong>
                                </span>
                            @endif
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Shg Name</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Name">
                  </div>
                  @if ($errors->has('name'))
                                <span class="invalid-feedback text-danger" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Shg contact</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control{{ $errors->has('contact') ? ' is-invalid' : '' }}" name="contact" value="{{ old('contact') }}" placeholder="Name">
                  </div>
                  @if ($errors->has('contact'))
                                <span class="invalid-feedback text-danger" role="alert">
                                    <strong>{{ $errors->first('contact') }}</strong>
                                </span>
                            @endif
                </div>
               
               <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Password</label>

                  <div class="col-sm-8">
                    <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ old('password') }}" placeholder="Password">
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
    <script>
function populateBlock(){
 var dist = $('#e1').find(":selected").val(); 
 var action = "getBlock";
          var url = SITE_URL+"/ajax/"+action+"/"+dist;
          $.ajax({
                method: 'get',
                url: url,
                dataType:'html',
                success: function(response){
                 $('#block').append(response);
                    console.log(response);
                },
                error: function(data){
                    console.log(data);
                    //alert("fail" + ' ' + this.data)
                },
            });
           
        }

function populateVill(){
 var block = $('#e2').find(":selected").val();
 var action = "getVill";
          var url = SITE_URL+"/ajax/"+action+"/"+block;
          $.ajax({
                method: 'get',
                url: url,
                dataType:'html',
                success: function(response){
                 $('#vill').append(response);
                    console.log(response);
                },
                error: function(data){
                    console.log(data);
                    //alert("fail" + ' ' + this.data)
                },
            });
           
        }
</script>
@endsection