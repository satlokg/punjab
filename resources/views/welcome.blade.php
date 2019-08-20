@extends('layouts.user')
@section('banner')
<div class="breadcrumb-area pt-35 pb-35 ">
    <div class="container">
    <div class="row">
    <div class="col-sm-4 col-md-3 sidebar">
        <div class="mini-submenu">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </div>
        <div class="list-group">
            <span href="#" class="list-group-item bg-orange text-white">
                <b>TOP CATEGORY</b>
            </span>
            @foreach($cat as $c)
            <a href="{{route('category',['c'=>$c->name])}}" class="list-group-item">
                <i class="fa fa-bar-chart-o"></i> {{$c->name}}
            </a>
           @endforeach

        </div>        
    </div>

    <div class="col-sm-4 col-md-6 sidebar">
        
        <div class="bd-example">
          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{url('public/upload/banner-top-1.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{url('public/upload/banner-top-2.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{url('public/upload/banner-top-3.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>

        

    </div>


    <div class="col-sm-4 col-md-3 sidebar">
        <div class="list-group">
            <div class="card">
                <img src="{{url('public/upload/banner-top-1.jpg')}}" class="card-img-top" alt="...">
            </div>
        </div> 
        <br>
        <div class="list-group">
            <div class="card">
                <img src="{{url('public/upload/banner-top-2.jpg')}}" class="card-img-top" alt="...">
            </div>
        </div> 
        
    </div>


    </div>
        <!-- <div class="breadcrumb-content text-center">
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li class="active">Shop </li>
            </ul>
        </div> -->
    </div>
</div>
@endsection
@section('content')
<div class="col-lg-9">
                <div class="shop-top-bar">
                    <div class="select-shoing-wrap">
                        <div class="shop-select">
                            <select>
                                <option value="">Sort by newness</option>
                                <option value="">A to Z</option>
                                <option value=""> Z to A</option>
                                <option value="">In stock</option>
                            </select>
                        </div>
                        <p>Showing 1–12 of 20 result</p>
                    </div>
                    <div class="shop-tab nav">
                        <a class="active" href="#shop-1" data-toggle="tab">
                            <i class="fa fa-table"></i>
                        </a>
                        <a href="#shop-2" data-toggle="tab">
                            <i class="fa fa-list-ul"></i>
                        </a>
                    </div>
                </div>
                <div class="shop-bottom-area mt-35">
                    <div class="tab-content jump">
                        <div id="shop-1" class="tab-pane active">
                            <div class="row">
                                @foreach($products as $product)
                                <div class="col-xl-4 col-md-6 col-lg-6 col-sm-6">
                                    <div class="product-wrap mb-25 scroll-zoom">
                                        <div class="product-img">

                                            <a href="{{route('product.detail',['id'=>$product->id])}}">
                                                @foreach($product->files as $file)
                                                <img class="default-img" src="{{url('public/files/').'/'.$file->filename}}" height="400" alt="">
                                                
                                                @endforeach
                                            </a>
                                            <div class="product-action">
                                                <div class="pro-same-action pro-wishlist">
                                                    <a title="Wishlist" href="#"><i class="pe-7s-like"></i></a>
                                                </div>
                                                <div class="pro-same-action pro-cart">
                                                    <a title="Add To Cart" href="#"><i class="pe-7s-cart"></i> Add to cart</a>
                                                </div>
                                                <div class="pro-same-action pro-quickview">
                                                    <a title="Quick View" href="#" data-toggle="modal" data-target="#exampleModal"><i class="pe-7s-look"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content text-center">
                                            <h3><a href="{{route('product.detail',['id'=>$product->id])}}">{{$product->pname}}</a></h3>
                                            <h5><a href="{{route('category',['c'=>$product->category->name])}}">{{$product->category->name}}</a></h5>
                                            <div class="product-rating">
                                                <i class="fa fa-star-o yellow"></i>
                                                <i class="fa fa-star-o yellow"></i>
                                                <i class="fa fa-star-o yellow"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                            <div class="product-price">
                                                <span>Rs. {{$product->price}}</span>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                               
                                
                            </div>
                        </div>
                        
                    </div>
                    <div class="pro-pagination-style text-center mt-30">
                        {!!$products->render()!!}                    </div>
                </div>
            </div>
@endsection