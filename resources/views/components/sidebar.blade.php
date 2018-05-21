<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ url('/images/admin-lte/avatar.png') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{Auth::user()->name}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- Sidebar user panel -->


        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>

            {{--admin menu--}}
            @if(Auth::user()->type == 'admin')
                <li class="treeview @if(Request::is('admin') || Request::is('user/add') || Request::is('user/list') || Request::is('admin/options')) active @endif">
                    <a href="#">
                        <i class="fa fa-th"></i>
                        <span>{{trans('sidebar.Admin Panel')}}</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>

                    <ul class="treeview-menu @if(Request::is('admin') || Request::is('user/add') || Request::is('user/list') || Request::is('admin/options')) menu-open @endif" style="display: @if(Request::is('admin') || Request::is('user/add') || Request::is('user/list') || Request::is('admin/options')) block @else none @endif">
                        <li @if(Request::is('admin')) class="active" @endif><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i>
                                <span>{{trans('sidebar.Admin Dashboard')}}</span></a></li>
                        <li @if(Request::is('user/add')) class="active" @endif><a href="{{ url('/user/add') }}"><i class="fa fa-plus-circle"></i>
                                <span>{{trans('sidebar.Add User')}}</span></a>
                        </li>
                        <li @if(Request::is('user/list')) class="active" @endif><a href="{{ url('/user/list') }}"><i class="fa fa-users"></i>
                                <span>{{trans('sidebar.Users')}}</span></a></li>
                        <li @if(Request::is('admin/options')) class="active" @endif><a href="{{ url('/admin/options') }}"><i class="fa fa-key"></i>
                                <span>{{trans('sidebar.Admin Options')}}</span></a></li>



                    </ul>
                </li>

            @endif

            <li @if(Request::is('profile')) class="active" @endif ><a href="{{ url('/profile') }}"><i class="fa fa-user"></i>
                    <span>{{trans('sidebar.Profile')}}</span></a></li>





        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
