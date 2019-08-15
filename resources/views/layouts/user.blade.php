<!doctype html>
<html class="no-js" lang="zxx">
<!-- Mirrored from demo.hasthemes.com/flone-preview/flone/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Aug 2019 16:37:57 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Flone - Minimalist eCommerce Bootstrap 4 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    
    <!-- CSS
	============================================ -->
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap.min.css') }}">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/icons.min.css') }}">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/plugins.css') }}">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}">
    <!-- Modernizer JS -->
    <script src="{{ asset('public/assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <style type="text/css">
        .list-group-item{
            border: none;
        }
        .bg-orange{
            background-color: #fc3903;
        }
        .list-group{
            border: 1px solid #999;
            border-radius: 5px 5px 0 0;
        }
        .breadcrumb-area{
            background-color: #e8e8ca;
        }
        .header-top-area{
            background-color: #e8e8ca;
        }
        
    </style>
</head>

<body>
@include('layouts.user.header')
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
            <a href="#" class="list-group-item">
                <i class="fa fa-comment-o"></i> Lorem ipsum
            </a>
            <a href="#" class="list-group-item">
                <i class="fa fa-search"></i> Lorem ipsum
            </a>
            <a href="#" class="list-group-item">
                <i class="fa fa-user"></i> Lorem ipsum
            </a>
            <a href="#" class="list-group-item">
                <i class="fa fa-folder-open-o"></i> Lorem ipsum <span class="badge">14</span>
            </a>
            <a href="#" class="list-group-item">
                <i class="fa fa-bar-chart-o"></i> Lorem ipsumr <span class="badge">14</span>
            </a>
            <a href="#" class="list-group-item">
                <i class="fa fa-envelope"></i> Lorem ipsum
            </a>

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
<div class="shop-area pt-95 pb-100">
    <div class="container">
        <div class="row flex-row">
            <div class="col-sm-4 col-md-3 sidebar">
        <div class="mini-submenu">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </div>
        <div class="list-group">
            <span href="#" class="list-group-item bg-orange text-white">
                <b>ALL CATEGORIES</b>
            </span>
            <a href="#" class="list-group-item">
                <i class="fa fa-comment-o"></i> Lorem ipsum
            </a>
            <a href="#" class="list-group-item">
                <i class="fa fa-search"></i> Lorem ipsum
            </a>
            <a href="#" class="list-group-item">
                <i class="fa fa-user"></i> Lorem ipsum
            </a>
            <a href="#" class="list-group-item">
                <i class="fa fa-folder-open-o"></i> Lorem ipsum <span class="badge">14</span>
            </a>
            <a href="#" class="list-group-item">
                <i class="fa fa-bar-chart-o"></i> Lorem ipsumr <span class="badge">14</span>
            </a>
            <a href="#" class="list-group-item">
                <i class="fa fa-envelope"></i> Lorem ipsum
            </a>

        </div>        
    </div>
            @yield('content')
            
        </div>
    </div>
</div>
@include('layouts.user.footer')


<!-- Modal -->

<!-- Modal end -->









<!-- JS
============================================ -->

<!-- jQuery JS -->
<script src="{{ asset('public/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
<!-- Popper JS -->
<script src="{{ asset('public/assets/js/popper.min.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('public/assets/js/bootstrap.min.js') }}"></script>
<!-- Plugins JS -->
<script src="{{ asset('public/assets/js/plugins.js') }}"></script>
<!-- Ajax Mail -->
<script src="{{ asset('public/assets/js/ajax-mail.js') }}"></script>
<!-- Main JS -->
<script src="{{ asset('public/assets/js/main.js') }}"></script>

</body>


<!-- Mirrored from demo.hasthemes.com/flone-preview/flone/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Aug 2019 16:37:57 GMT -->
</html>