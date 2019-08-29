<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{!! url('public/dist/img/user2-160x160.jpg') !!}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{auth()->user()->name}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
      
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
           
            <li>
                <a href="{!! url('/shg/dashboard') !!}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                   
                </a>
              
            </li>
            <li><a href="{{route('shg.products')}}"><i class="fa fa-dashboard"></i> Products</a></li>
            <li><a href="{{route('shg.today.order')}}"><i class="fa fa-dashboard"></i> Today's Orders</a></li>
            <li><a href="{{route('shg.month.order')}}"><i class="fa fa-dashboard"></i> This Month's Orders</a></li>
            <li><a href="{{route('shg.order')}}"><i class="fa fa-dashboard"></i> All Orders</a></li>
            <li><a href="{{route('shg.delivered.order')}}"><i class="fa fa-dashboard"></i> All Delivered Orders</a></li>
            <li><a href="{{route('shg.pending.order')}}"><i class="fa fa-dashboard"></i> All Pending Orders</a></li>
            <li><a href="{{route('shg.cancel.oreder')}}"><i class="fa fa-dashboard"></i> All Canceled Orders</a></li>
            
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
