<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            @php
                $current_user = Auth::user();
            @endphp
            <div class="pull-left image">
                <img src="{{ $current_user->gravatar() }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ $current_user->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li>
                <a href="{{ url('/home') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pencil"></i>
                    <span>Blog</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> All Posts</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Add New</a></li>
                </ul>
            </li>
            <li><a href="#"><i class="fa fa-folder"></i> <span>Categories</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>