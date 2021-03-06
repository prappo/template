<header class="main-header">
    <!-- Logo -->
    <a href="{{ url('/home') }}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->

        <span class="logo-mini"></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Cargo</b></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                {{-- Language settings--}}

                <li class="dropdown messages-menu">

                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">--}}
                        {{--<i class="fa fa-language"></i>--}}

                    {{--</a>--}}

                    {{-- language menu--}}
                    {{--<ul class="dropdown-menu">--}}
                        {{--<li class="header">{{trans('navigation.Select your language')}}</li>--}}
                        {{--<li>--}}
                            {{--<!-- inner menu: contains the actual data -->--}}
                            {{--<ul class="menu">--}}

                                {{--<li>--}}
                                    {{--<a data-id="gb" class="lang"  href="#">--}}
                                        {{--<div class="pull-left">--}}
                                            {{--<span class="flag-icon flag-icon-gb"></span>--}}

                                        {{--</div>--}}
                                        {{--<h4>--}}
                                            {{--English--}}

                                        {{--</h4>--}}

                                    {{--</a>--}}
                                {{--</li>--}}

                                {{--<li>--}}
                                    {{--<a data-id="bd" class="lang"  href="#">--}}
                                        {{--<div class="pull-left">--}}
                                            {{--<span class="flag-icon flag-icon-bd"></span>--}}

                                        {{--</div>--}}
                                        {{--<h4>--}}
                                            {{--Bangla--}}

                                        {{--</h4>--}}

                                    {{--</a>--}}
                                {{--</li>--}}


                            {{--</ul>--}}
                        {{--</li>--}}
                        {{--@if(Auth::user()->type == 'admin')--}}
                            {{--<li class="footer"><a href="{{ url('/language/add') }}">Add new language</a></li>--}}
                        {{--@endif--}}
                    {{--</ul>--}}
                </li>
            {{--<li class="dropdown messages-menu">--}}

            {{--<a id="intro" href="#" class="dropdown-toggle" data-toggle="dropdown">--}}
            {{--<i class="fa fa-question"></i>--}}
            {{--Help--}}
            {{--</a>--}}

            {{--</li>--}}
            <!-- Messages: style can be found in dropdown.less-->


                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img @if(Auth::user()->img == "") src="{{ url('/images/admin-lte/avatar.png') }}" @else src="{{url('/uploads')}}/{{Auth::user()->img}}" @endif class="user-image" alt="User Image">
                        <span class="hidden-xs">{{ \Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">

                            <img @if(Auth::user()->img == "") src="{{ url('/images/admin-lte/avatar.png') }}" @else src="{{url('/uploads')}}/{{Auth::user()->img}}" @endif class="img-circle"
                                 alt="User Image">
                            <p>
                                {{ \Auth::user()->name }}
                                <small>{{ \Auth::user()->email }}</small>
                            </p>
                        </li>

                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="{{url('/profile')}}" class="btn btn-default btn-flat">{{trans('navigation.Profile')}}</a>
                            </div>
                            <div class="pull-right">
                                <a href="{{ url('/logout') }}" class="btn btn-default btn-flat">{{trans('navigation.Sign out')}}</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>