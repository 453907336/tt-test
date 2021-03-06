<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=10">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{asset('/static/admin/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('/static/admin/dist/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('/static/admin/dist/css/AdminLTE.css')}}">
    <link rel="stylesheet" href="{{asset('/static/admin/dist/css/skins/_all-skins.css')}}">
    <link rel="stylesheet" href="{{asset('/static/admin/vince/css/vince.css')}}">
    <link rel="stylesheet" href="{{asset('/static/admin/vince/biao/css/font-awesome.min.css')}}">
 {{--   <!--[if lt IE 9]>
    <script src="dist/js/html5shiv.min.js"></script>
    <script src="dist/js/respond.min.js"></script>
    <![endif]-->--}}
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <header class="main-header">
        <a href="#" class="logo">
      <span class="logo-mini">
	  <img src="{{asset('/static/admin/vince/images/v01.png')}}">
	  </span>
            <span class="logo-lg"><img src="{{asset('/static/admin/vince/images/v01.png')}}">项目</span>
        </a>
        <nav class="navbar navbar-static-top">
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"></a>
            <span class="all_title">cms-系统</span>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{asset('/static/admin/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
                            <span class="hidden-xs">管理员</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="user-header">
                                <img src="{{asset('/static/admin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
                                <p>
                                    姓名：管理员
                                    <small>部门：信息部</small>
                                </p>
                            </li>
                            <li class="user-footer">
                                <div class="pull-right">
                                    <a href="{{url('admin/login')}}" class="btn btn-default btn-flat">退出系统</a>
                                </div>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </nav>
    </header>
    <aside class="main-sidebar">
        <section class="sidebar">
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('/static/admin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>当前用户：管理员</p>
                    <p class="menu_time">
                        时间：<span id="nowTime">2016-9-13 16:12:14</span></p>
                </div>
            </div>

            <ul class="sidebar-menu">
                <li class="header">菜单 MENU</li>
                <li>
                    <a href="{{url('admin/')}}">
                        <i class="fa fa-home" style="font-size: 22px"></i> <span>首页</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('admin/user')}}">
                        <i class="fa fa-eye"></i> <span>管理员列表</span>
                    </a>
                </li>
                <li>
                    <a href="yxjc.html">
                        <i class="fa fa-print" ></i> <span>运行监测</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-sliders"></i>
                        <span>负荷响应</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="xyxgpj.html"><i class="fa fa-bookmark"></i> 响应效果评价</a></li>
                        <li><a href="fhxyfx.html"><i class="fa fa-bookmark"></i> 负荷响应分析</a></li>

                        <li><a href="xyfagl.html"><i class="fa fa-bookmark"></i> 响应方案管理</a></li>
                    </ul>
                </li>

                <li>
                    <a href="yjgl.html">
                        <i class="fa fa-bell"></i> <span>预警管理</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-gears"></i>
                        <span>设备管理</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="sbrk.html"><i class="fa fa-bookmark"></i> 设备入库</a></li>
                        <li><a href="sbaz.html"><i class="fa fa-bookmark"></i> 设备安装</a></li>
                        <li><a href="sbjx.html"><i class="fa fa-bookmark"></i> 设备检修</a></li>
                        <li><a href="sbbf.html"><i class="fa fa-bookmark"></i> 设备报废</a></li>
                        <li><a href="sbcx.html"><i class="fa fa-bookmark"></i> 设备查询</a></li>
                    </ul>
                </li>
                <li  class="active">
                    <a href="kzcl.html">
                        <i class="fa fa-magnet"></i> <span>控制策略</span>
                    </a>
                </li>
                <li>
                    <a href="xtjc.html">
                        <i class="fa fa-map"></i> <span>系统集成</span>
                    </a>
                </li>
            </ul>
        </section>
    </aside>
    <div class="content-wrapper">
        <section class="content-header">
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
                <li class="active">控制策略</li>
            </ol>
        </section>
        <div class="content qqq">
            @yield('content')
         </div>
    </div>
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b></b>
        </div>
        <strong>tt-admin</strong>
    </footer>
    <div class="control-sidebar-bg"></div>
</div>
    <script src="{{asset('/static/admin/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
    <script src="{{asset('/static/admin/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/static/admin/dist/js/app.min.js')}}"></script>
    <script src="{{asset('/static/admin/vince/js/nicescroll.js')}}"></script>
    <script src="{{asset('/static/admin/vince/js/demo.js')}}"></script>
</body>
</html>

