<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript">
       var SITE_URL = {!! json_encode(url('/district')) !!}      
    </script>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CMS') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('public/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('public/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/bower_components/jvectormap/jquery-jvectormap.css') }}" rel="stylesheet">
    <link href="{{ asset('public/bower_components/morris.js/morris.css') }}" rel="stylesheet">
    <link href="{{ asset('public/bower_components/Ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">


    <link href="{{ asset('public/bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('public/bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Ionicons -->
    <link href="{{ asset('public/bower_components/Ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <!-- DataTables -->
    <!-- Theme style -->
    <script src="{{ asset('public/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <link href="{{ asset('public/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    <script src="//cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css" rel="stylesheet" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>

</head>
<body class="hold-transition skin-blue sidebar-mini wysihtml5-supported" style="height: auto; min-height: 100%;">
<section>
    <div id="app" class="wrapper" style="height: auto; min-height: 100%;">
        <div>
            @include('partials.district.leftPanel')
        </div>
        <div>
            @include('partials.district.headerBar')
        </div>
        <div>
            <div class="content-wrapper">
                @yield('content')
            </div>
        </div>
        <div>
            @include('partials.district.footer')
        </div>
    </div>
</section>


<!-- Scripts -->
<script src="{{ asset('public/js/dashboard.js') }}"></script>
<script src="{{ asset('public/js/demo.js') }}"></script>
<script src="{{ asset('public/js/adminlte.min.js') }}"></script>
<script src="{{ asset('public/js/bootstrap3-wysihtml5.all.min.js') }}"></script>
<script src="{{ asset('public/js/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('public/js/jquery-jvectormap-world-mill-en.js') }}"></script>
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>

<script src="{{ asset('public/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('public/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/bower_components/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('public/bower_components/morris.js/morris.min.js') }}"></script>
<script src="{{ asset('public/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('public/bower_components/jquery-knob/dist/jquery.knob.min.js') }}"></script>
<script src="{{ asset('public/bower_components/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('public/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('public/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('public/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('public/bower_components/fastclick/lib/fastclick.js') }}"></script>

<script src="{{ asset('public/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('public/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
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
 @yield('js')

</body>
</html>
