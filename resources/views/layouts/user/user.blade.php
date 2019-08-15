<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from demo.hasthemes.com/flone-preview/flone/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Aug 2019 16:37:57 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Welcome to Make in punjab</title>
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
</head>

<body>
@include('uprt.header')
<div class="breadcrumb-area pt-35 pb-35 bg-gray-3">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li class="active">Shop </li>
            </ul>
        </div>
    </div>
</div>
<div class="shop-area pt-95 pb-100">
    <div class="container">
        <div class="row flex-row">
            @include('uprt.sidebar')
            @yield('content')
            
        </div>
    </div>
</div>
@include('uprt.footer')


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