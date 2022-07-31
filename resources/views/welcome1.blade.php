@extends('layouts.newUser.layout')
@section('content')
@include('layouts.newUser.header')
	<!-- Slider Area -->
	<section class="hero-slider">
		<!-- Single Slider -->
		<div class="single-slider p-4">
			<div class="container">
				<div class="row no-gutters mt-4">
					<div class="col-lg-6 p-4">
						<div id="myCarousel" class="carousel slide" data-ride="carousel">

							<!-- Indicators -->
							<ol class="carousel-indicators">
							  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							  <li data-target="#myCarousel" data-slide-to="1"></li>
							  <li data-target="#myCarousel" data-slide-to="2"></li>
							</ol>

							<!-- Wrapper for slides -->
							<div class="carousel-inner" style="    border-radius:0 100px; overflow:hidden;">
								<img src="{{ asset('public/new/images/bgslider.png')}}" class="overSlider">
							  <div class="item active">
								<img src="{{ asset('public/new/images/handyA-A.jpg')}}" alt="Los Angeles" style="width:100%;">
								<div class="itemContent">
									<h3>Lorem ips</h3>
									<p>Lorem Ipsum dollor sit ammet some</p>
								</div>
							  </div>

							  <div class="item">
								<img src="{{ asset('public/new/images/handyA-B.jpg')}}" alt="Chicago" style="width:100%;">
								<div class="itemContent">
									<h3>Lorem ips</h3>
									<p>Lorem Ipsum dollor sit ammet some</p>
								</div>
							  </div>

							  <div class="item">
								<img src="{{ asset('public/new/images/handyA-C.jpg')}}" alt="New york" style="width:100%;">
								<div class="itemContent">
									<h3>Lorem ips</h3>
									<p>Lorem Ipsum dollor sit ammet some</p>
								</div>
							  </div>
							</div>

							<!-- Left and right controls -->
							<a class="left carousel-control" href="#myCarousel" data-slide="prev">
							  <span class="glyphicon glyphicon-chevron-left"></span>
							  <span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#myCarousel" data-slide="next">
							  <span class="glyphicon glyphicon-chevron-right"></span>
							  <span class="sr-only">Next</span>
							</a>
						  </div>
					</div>
					<div class="col-lg-6 p-4">
						<div id="myCarousel1" class="carousel slide" data-ride="carousel">

							<!-- Indicators -->
							<ol class="carousel-indicators">
							  <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
							  <li data-target="#myCarousel1" data-slide-to="1"></li>
							  <li data-target="#myCarousel1" data-slide-to="2"></li>
							</ol>

							<!-- Wrapper for slides -->
							<div class="carousel-inner" style="    border-radius: 100px 0;  overflow:hidden;">
								<img src="{{ asset('public/new/images/bgslider1.png')}}" class="overSlider">
							  <div class="item active">
								<img src="{{ asset('public/new/images/handyB-A.jpg')}}" alt="Los Angeles" style="width:100%;">
								<div class="itemContent">
									<h3>Lorem ips</h3>
									<p>Lorem Ipsum dollor sit ammet some</p>
								</div>
							  </div>

							  <div class="item">
								<img src="{{ asset('public/new/images/handyB-B.jpg')}}" alt="Chicago" style="width:100%;">
								<div class="itemContent">
									<h3>Lorem ips</h3>
									<p>Lorem Ipsum dollor sit ammet some</p>
								</div>
							  </div>

							  <div class="item">
								<img src="{{ asset('public/new/images/handyB-C.jpg')}}" alt="New york" style="width:100%;">
								<div class="itemContent">
									<h3>Lorem ips</h3>
									<p>Lorem Ipsum dollor sit ammet some</p>
								</div>
							  </div>
							</div>

							<!-- Left and right controls -->
							<a class="left carousel-control" href="#myCarousel" data-slide="prev">
							  <span class="glyphicon glyphicon-chevron-left"></span>
							  <span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#myCarousel" data-slide="next">
							  <span class="glyphicon glyphicon-chevron-right"></span>
							  <span class="sr-only">Next</span>
							</a>
						  </div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Single Slider -->
	</section>
	<!--/ End Slider Area -->

	<!-- Start Small Banner  -->
	<section class="small-banner section">
		<div class="container-fluid">
			<div class="row">
				<!-- Single Banner  -->
				<div class="col-lg-4 col-md-6 col-12">
					<div class="single-banner">
						<img src="{{ asset('public/new/images/handmade.jpg')}}" alt="#">
						<div class="content">
							<p>Hand Made</p>
							<h3>Joot Bags <br> collection</h3>
							<a href="#">Discover Now</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
				<!-- Single Banner  -->
				<div class="col-lg-4 col-md-6 col-12">
					<div class="single-banner">
						<img src="{{ asset('public/new/images/punjabiphulkari.jpg')}}" alt="#">
						<div class="content">
							<p>Punjabi Phulkari</p>
							<h3>Awesome Dupatta <br> 2020</h3>
							<a href="#">Shop Now</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
				<!-- Single Banner  -->
				<div class="col-lg-4 col-12">
					<div class="single-banner tab-height">
						<img src="{{ asset('public/new/images/edibleproducts.jpg')}}" alt="#">
						<div class="content">
							<p>Flash Sale</p>
							<h3>Edible Products <br> Up to <span>40%</span> Off</h3>
							<a href="#">Discover Now</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
			</div>
		</div>
	</section>
	<!-- End Small Banner -->



	<!-- Start Midium Banner  -->
	<section class="midium-banner mt-4">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>New Arrivals</h2>
						<p>Lorem ipsum dollor sit ammet some dummy text goes here.</p>
					</div>

				</div>
			</div>
			<div class="row">
				<!-- Single Banner  -->
				<div class="col-lg-6 col-md-6 col-12">
					<div class="single-banner">
						<img src="{{ asset('public/new/images/jutebag.jpg')}}" alt="#">
						<div class="content">
							<p>Man's Collectons</p>
							<h3>Man's items <br>Up to<span> 50%</span></h3>
							<a href="#">Shop Now</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
				<!-- Single Banner  -->
				<div class="col-lg-6 col-md-6 col-12">
					<div class="single-banner">
						<img src="{{ asset('public/new/images/edibleA.jpg')}}" alt="#">
						<div class="content">
							<p>shoes women</p>
							<h3>mid season <br> up to <span>70%</span></h3>
							<a href="#" class="btn">Shop Now</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
			</div>
		</div>
	</section>
	<!-- End Midium Banner -->

	<!-- Start Most Popular -->
	<div class="product-area most-popular section">
        <div class="container">
            <div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>Hot Deals</h2>
						<p>Lorem ipsum dollor sit ammet some dummy text goes here.</p>
					</div>
				</div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel popular-slider">
                        @foreach ($newArrivals as $na)
                           <!-- Start Single Product -->
						<div class="single-product">
							<div class="product-img">
								<a href="product-details.html">
									<img class="default-img" src="{{url('public/files/').'/'.$na->files['0']->filename}}" alt="#">
									<img class="hover-img" src="{{url('public/files/').'/'.$na->files['0']->filename}}" alt="#">
									<span class="out-of-stock">Hot</span>
								</a>
								<div class="button-head">
									<div class="product-action">
										<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
										<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
										<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
									</div>
									<div class="product-action-2">
										<a title="Add to cart" href="{{route('cart.add',['id'=>$na->id])}}">Add to cart</a>
									</div>
								</div>
							</div>
							<div class="product-content">
								<h3><a href="{{route('product.detail',['id'=>$na->id])}}">{{$na->pname}}</a></h3>
								<div class="product-price">
									<span class="old">₹{{$na->price}}.00</span>
									<span>₹{{$na->price}}.00</span>
								</div>
							</div>
						</div>
						<!-- End Single Product -->
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- End Most Popular Area -->

	<section class="section advBanners" >
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8 offset-md-2 col-xs-12">
                    <div class="section-title mb-60">
                        <span class="text-white wow fadeInDown" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown;">Eshop Free Lite version</span>
                        <h2 class="text-white wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Currently You are using free<br> lite Version of Eshop.</h2>
                        <p class="text-white wow fadeInUp" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">Please, purchase full version of the template to get all pages,<br> features and commercial license.</p>

                        <div class="button">
                            <a href="#" target="_blank" rel="nofollow" class="btn wow fadeInUp" data-wow-delay=".8s">Purchase Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

	<!-- Start Shop Home List  -->
	<section class="shop-home-list section">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 col-12">
					<div class="row">
						<div class="col-12">
							<div class="shop-section-title">
								<h1>On sale</h1>
							</div>
						</div>
					</div>

                    @foreach ($onSale as $os)
                        <!-- Start Single List  -->
					<div class="single-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="list-image overlay">
									<img src="{{url('public/files/').'/'.$os->files['0']->filename}}" alt="#">
									<a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 no-padding">
								<div class="content">
									<h4 class="title"><a href="{{route('product.detail',['id'=>$os->id])}}">{{$os->pname}}</a></h4>
									<p>{!!  substr(strip_tags($os->pdesc), 0, 15) !!}</p>
									<p class="price with-discount">₹{{$os->price}}</p>
								</div>
							</div>
						</div>
					</div>
					<!-- End Single List  -->
                    @endforeach


				</div>
				<div class="col-lg-4 col-md-6 col-12">
					<div class="row">
						<div class="col-12">
							<div class="shop-section-title">
								<h1>Best Seller</h1>
							</div>
						</div>
					</div>
                    @foreach ($bestSeller as $os)
                    <!-- Start Single List  -->
                <div class="single-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="list-image overlay">
                                <img src="{{url('public/files/').'/'.$os->files['0']->filename}}" alt="#">
                                <a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 no-padding">
                            <div class="content">
                                <h4 class="title"><a href="{{route('product.detail',['id'=>$os->id])}}">{{$os->pname}}</a></h4>
                                <p>{!!  substr(strip_tags($os->pdesc), 0, 15) !!}</p>
                                <p class="price with-discount">₹{{$os->price}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single List  -->
                @endforeach
				</div>
				<div class="col-lg-4 col-md-6 col-12">
					<div class="row">
						<div class="col-12">
							<div class="shop-section-title">
								<h1>Top viewed</h1>
							</div>
						</div>
					</div>
					@foreach ($mostView as $os)
                    <!-- Start Single List  -->
                <div class="single-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="list-image overlay">
                                <img src="{{url('public/files/').'/'.$os->files['0']->filename}}" alt="#">
                                <a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 no-padding">
                            <div class="content">
                                <h4 class="title"><a href="{{route('product.detail',['id'=>$os->id])}}">{{$os->pname}}</a></h4>
                                <p>{!!  substr(strip_tags($os->pdesc), 0, 10) !!}</p>
                                <p class="price with-discount">₹{{$os->price}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single List  -->
                @endforeach
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Home List  -->



	<!-- Start Shop Services Area -->
	<section class="shop-services section home">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-rocket"></i>
						<h4>Free shiping</h4>
						<p>Orders over ₹100</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-reload"></i>
						<h4>Free Return</h4>
						<p>Within 30 days returns</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-lock"></i>
						<h4>Sucure Payment</h4>
						<p>100% secure payment</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-tag"></i>
						<h4>Best Peice</h4>
						<p>Guaranteed price</p>
					</div>
					<!-- End Single Service -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Services Area -->

	<!-- Start Shop Newsletter  -->
	<section class="shop-newsletter section">
		<div class="container">
			<div class="inner-top">
				<div class="row">
					<div class="col-lg-8 offset-lg-2 col-12">
						<!-- Start Newsletter Inner -->
						<div class="inner">
							<h4>Newsletter</h4>
							<p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
							<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
								<input name="EMAIL" placeholder="Your email address" required="" type="email">
								<button class="btn">Subscribe</button>
							</form>
						</div>
						<!-- End Newsletter Inner -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Newsletter -->

	<!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row no-gutters">
							<div class="col-lg-6 offset-lg-3 col-12">
								<h4 style="margin-top:100px;font-size:14px; font-weight:500; color:#ff3000; display:block; margin-bottom:5px;">Eshop Free Lite</h4>
								<h3 style="font-size:30px;color:#333;">Currently You are using free lite Version of Eshop.<h3>
								<p style="display:block; margin-top:20px; color:#888; font-size:14px; font-weight:400;">Please, purchase full version of the template to get all pages, features and commercial license</p>
								<div class="button" style="margin-top:30px;">
									<a href="https://wpthemesgrid.com/downloads/eshop-ecommerce-html5-template/" target="_blank" class="btn" style="color:#fff;">Buy Now!</a>
								</div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- Modal end -->
@include('layouts.newUser.footer')
@endsection
