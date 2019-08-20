@extends('layouts.user')
@section('banner')
<div class="breadcrumb-area pt-35 pb-35 bg-gray-3">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <ul>
                <li>
                    <a href="index.html">Product Details</a>
                </li>
                <li class="active">{{$product->pname}} </li>
            </ul>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="col-lg-9">
        <div class="shop-area pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-7 col-md-12">
                <div class="product-details-img mr-20 product-details-tab">
                    <div id="gallery" class="product-dec-slider-2">
                        @foreach($product->files as $file)
                        <a data-image="{{url('public/files/').'/'.$file->filename}}" data-zoom-image="{{url('public/files/').'/'.$file->filename}}">
                            <img src="{{url('public/files/').'/'.$file->filename}}" alt="">
                        </a>
                        @endforeach
                    </div>
                    <div class="zoompro-wrap zoompro-2 pl-20">
                        <div class="zoompro-border zoompro-span">
                            <img class="zoompro" src="{{url('public/files/').'/'.$product->files[0]->filename}}" data-zoom-image="{{url('public/files/').'/'.$product->files[0]->filename}}" alt=""/>          
                            <!-- <span>-29%</span>
                            <div class="product-video">
                                <a class="video-popup" href="https://www.youtube.com/watch?v=tce_Ap96b0c">
                                    <i class="fa fa-video-camera"></i>
                                    View Video
                                </a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-lg-5 col-md-12">
                <div class="product-details-content">
                    <h2>{{$product->pname}}</h2>
                    <div class="product-details-price">
                        <span>Rs. {{$product->price}} </span>
                        
                    </div>
                    <div class="pro-details-rating-wrap">
                        <div class="pro-details-rating">
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o yellow"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <span><a href="#">3 Reviews</a></span>
                    </div>
                    <p>{{$product->pdesc}} </p>
                    <p>{{$product->pmaterial}} </p>
                    <!-- <div class="pro-details-list">
                        <ul>
                            <li>- 0.5 mm Dail</li>
                            <li>- Inspired vector icons</li>
                            <li>- Very modern style  </li>
                        </ul>
                    </div>
                    <div class="pro-details-size-color">
                        <div class="pro-details-color-wrap">
                            <span>Color</span>
                            <div class="pro-details-color-content">
                                <ul>
                                    <li class="blue"></li>
                                    <li class="maroon active"></li>
                                    <li class="gray"></li>
                                    <li class="green"></li>
                                    <li class="yellow"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="pro-details-size">
                            <span>Size</span>
                            <div class="pro-details-size-content">
                                <ul>
                                    <li><a href="#">s</a></li>
                                    <li><a href="#">m</a></li>
                                    <li><a href="#">l</a></li>
                                    <li><a href="#">xl</a></li>
                                    <li><a href="#">xxl</a></li>
                                </ul>
                            </div>
                        </div>
                    </div> -->
                    <div class="pro-details-quality">
                        <div class="cart-plus-minus">
                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                        </div>
                        <div class="pro-details-cart btn-hover">
                            <a href="#">Add To Cart</a>
                        </div>
                        <div class="pro-details-wishlist">
                            <a href="#"><i class="fa fa-heart-o"></i></a>
                        </div>
                        <div class="pro-details-compare">
                            <a href="#"><i class="pe-7s-shuffle"></i></a>
                        </div>
                    </div>
                    <div class="pro-details-meta">
                        <span>Categories :</span>
                        <ul>
                            <li><a href="#">{{$product->category->name}}</a></li>
                            
                        </ul>
                    </div>
                    <div class="pro-details-meta">
                        <span>Tag :</span>
                        <ul>
                            <li><a href="#">Fashion, </a></li>
                            <li><a href="#">Furniture,</a></li>
                            <li><a href="#">Electronic</a></li>
                        </ul>
                    </div>
                    <div class="pro-details-meta">
                        <span>Owner Name :</span>
                        <ul>
                            <li><a href="#">{{$product->shg->name}} +91-{{$product->shg->contact}}</a></li>
                            
                        </ul>
                    </div>
                    <div class="pro-details-social">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>      
               
</div>

<div class="related-product-area pb-95">
    <div class="container">
        <div class="section-title text-center mb-50">
            <h2>Related products</h2>
        </div>
        <div class="related-product-active owl-carousel">
            @foreach($products as $prd)
            <div class="product-wrap">
                <div class="product-img">
                    <a href="{{route('product.detail',['id'=>$prd->id])}}">
                        @foreach($prd->files as $file)
                        <img class="default-img" height="300" src="{{url('public/files/').'/'.$file->filename}}" alt="">
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
                            <a title="Quick View" href="{{route('product.detail',['id'=>$prd->id])}}" data-toggle="modal" data-target="#exampleModal"><i class="pe-7s-look"></i></a>
                        </div>
                    </div>
                </div>
                <div class="product-content text-center">
                    <h3><a href="{{route('product.detail',['id'=>$prd->id])}}">{{$prd->pname}}</a></h3>
                    <div class="product-rating">
                        <i class="fa fa-star-o yellow"></i>
                        <i class="fa fa-star-o yellow"></i>
                        <i class="fa fa-star-o yellow"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <div class="product-price">
                        <span>Rs. {{$prd->price}}</span>
                       
                    </div>
                </div>
            </div>
            @endforeach
          
           
           
        </div>
    </div>
</div>
@endsection