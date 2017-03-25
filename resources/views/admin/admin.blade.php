@extends('admin.layout.base')

{{--顶部导航--}}
@section('main-header')
    <header class="main-header">
        <a href="{{url('/dashboard')}}" class="logo">
            <span class="logo-mini">LC</span>
            <span class="logo-lg"><b>AdminLC</b></span>
        </a>
        <nav class="navbar navbar-static-top">
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown notifications-menu">
                        <a href="{{url('/dashboard')}}">
                            <i class="fa fa-home"></i>
                            <span class="label label-info">H</span>
                        </a>
                    </li>
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="label label-warning">10</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">最新私信列表</li>
                            <li>
                                <ul class="menu">
                                    <li>
                                        <a href="#">
                                            你的网站做的真好啊
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer"><a href="#">查看更多</a></li>
                        </ul>
                    </li>
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{url('dist/img/avatar.jpeg')}}" class="user-image" alt="User Image">
                            <span class="hidden-xs">Admin Info</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="user-header">
                                <img src="{{url('dist/img/avatar.jpeg')}}" class="img-circle" alt="User Image">

                                <p>
                                    LaravelChen is a Good Programmer
                                    <small>Member since Nov. 2017</small>
                                </p>
                            </li>
                            <li class="user-body">
                                <div class="row">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">PHP</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">VUEJS</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">C++</a>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">个人资料</a>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="btn btn-default btn-flat">退出</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
@endsection
{{--/顶部导航--}}

{{--主导航栏--}}
@section('main-sidebar')
    <aside class="main-sidebar">
        <section class="sidebar">
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{url('dist/img/avatar.jpeg')}}" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>LaravelChen</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                </div>
            </form>
            <!-- /.search form -->

            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header">主导航栏</li>
                <li>
                    <a href="{{url('/dashboard')}}">
                        <i class="fa fa-dashboard"></i> <span>控制面板</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-user"></i>
                        <span>用户管理</span>
                        <span class="pull-right-container">
                             <i class="fa fa-angle-left pull-right"></i>
                         </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{url('/admin/info/index')}}"><i class="fa fa-star-o"></i>个人资料</a></li>
                        <li><a href="{{url('/admin/usermember/index')}}"><i class="fa fa-star-o"></i>管理员(用户)</a></li>
                        <li><a href="#"><i class="fa fa-star-o"></i>角色</a></li>
                        <li><a href="#"><i class="fa fa-star-o"></i>权限</a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-pie-chart"></i>
                        <span>内容管理</span>
                        <span class="pull-right-container">
                             <i class="fa fa-angle-left pull-right"></i>
                         </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{url('admin/article/index')}}"><i class="fa fa-star-o"></i>文章</a></li>
                        <li><a href=""><i class="fa fa-star-o"></i>评论</a></li>
                    </ul>
                <li class="header">LABELS</li>
                <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
                <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
                <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
                </li>

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>
@endsection
{{--/主导航栏--}}

{{--底部--}}
@section('main-footer')
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.3.8
        </div>
        <strong>Admin@2017-3-16<a href="https://github.com/LaravelChen" target="_blank">LaravelChen</a>.</strong>
    </footer>
@endsection
{{--/底部--}}

{{--右侧边栏--}}
@section('right-sidebar')
    <aside class="control-sidebar control-sidebar-dark">
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading">最近活动</h3>
                <ul class='control-sidebar-menu'>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">LaravelChen</h4>
                                <p>一个热爱技术的小青年</p>
                            </div>
                        </a>
                    </li>
                </ul><!-- /.control-sidebar-menu -->

                <h3 class="control-sidebar-heading">任务进度</h3>
                <ul class='control-sidebar-menu'>
                    <li>
                        <a href="javascript:void(0);">
                            <h4 class="control-sidebar-subheading">
                                自定义模版设计
                                <span class="label label-danger pull-right">70%</span>
                            </h4>
                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                            </div>
                        </a>
                    </li>
                </ul><!-- /.control-sidebar-menu -->

            </div><!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
                <form method="post">
                    <h3 class="control-sidebar-heading">常规设置</h3>
                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            报告面板用法
                            <input type="checkbox" class="pull-right" checked/>
                        </label>
                        <p>
                            关于常规设置选项的一些信息
                        </p>
                    </div><!-- /.form-group -->
                </form>
            </div><!-- /.tab-pane -->

        </div>
    </aside>
    <div class="control-sidebar-bg"></div>
@endsection
{{--/右侧边栏--}}