<!doctype html>
<html class="no-js" lang="zxx">
<!-- Mirrored from demo.hasthemes.com/flone-preview/flone/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Aug 2019 16:37:57 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Welcome to Make in punjab</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="csrf-token" content="{{ csrf_token() }}">
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
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css" rel="stylesheet" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
</head>

<body>
@include('layouts.user.header')
@yield('banner')
<div class="banner-area pt-20 pb-10">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="single-banner mb-30">
                    <a href="product-details.html"><img src="{{url('public/sl/p3.jpg')}}" alt=""></a>
                    <div class="banner-content">
                        <!-- <h3>Watches</h3>
                        <h4>Starting at <span>$99.00</span></h4> -->
                        <a href="product-details.html"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="single-banner mb-30">
                    <a href="product-details.html"><img src="{{url('public/sl/p4.jpg')}}" alt=""></a>
                    <div class="banner-content">
                        <!-- <h3>Plo Bag</h3>
                        <h4>Starting at <span>$79.00</span></h4> -->
                        <a href="product-details.html"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="single-banner mb-30">
                    <a href="product-details.html"><img src="{{url('public/sl/p5.jpg')}}" alt=""></a>
                    <div class="banner-content">
                        <!-- <h3>Sunglass</h3>
                        <h4>Starting at <span>$79.00</span></h4> -->
                        <a href="product-details.html"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="shop-area pt-10 pb-10">
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
                        <b>ALL DISTRICT</b>
                    </span>
                    @foreach($dist as $k=>$v)
                    <a href="{{route('districts',['d'=>$v->name])}}" class="list-group-item">
                        <i class="fa fa-shopping-bag text-success" aria-hidden="true"></i>  {{$v->name}}
                    </a>
                   @endforeach

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
<script>
  @if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}";
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;
        
        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;

        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;

        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
  @endif
</script>

</body>


<!-- Mirrored from demo.hasthemes.com/flone-preview/flone/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Aug 2019 16:37:57 GMT -->
</html>