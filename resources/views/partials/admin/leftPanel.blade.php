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
           
            <li class="active treeview menu-open">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{!! url('/admin/dashboard') !!}"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                </ul>
            </li>
            <li><a href="{!! url('admin/shg') !!}"><i class="fa fa-dashboard"></i> Pages</a></li>
            <li><a href="{!! url('admin/category') !!}"><i class="fa fa-dashboard"></i> Category</a></li>
            <li><a href="{!! url('admin/district') !!}"><i class="fa fa-dashboard"></i> District</a></li>
            <li><a href="{!! url('admin/shg') !!}"><i class="fa fa-dashboard"></i> Shg</a></li>
            <li><a href="{!! url('admin/shg') !!}"><i class="fa fa-dashboard"></i> Banner</a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
