<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Khóa Học Lập Trình Laravel Framework 5.x Tại Khoa Phạm">
    <meta name="author" content="Vu Quoc Tuan">
    <title>Admin - Hội LV</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{Asset('/admin/bower_components/bootstrap/dist/css/bootstrap.min.css');}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{Asset('/admin/bower_components/metisMenu/dist/metisMenu.min.css');}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{Asset('/admin/dist/css/sb-admin-2.css');}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{Asset('/admin/bower_components/font-awesome/css/font-awesome.min.css');}}" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="{{Asset('/admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css');}}" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="{{Asset('/admin/bower_components/datatables-responsive/css/dataTables.responsive.css');}}" rel="stylesheet">

    <script src="{{Asset('/admin/bower_components/jquery/dist/jquery.min.js');}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{Asset('/admin/bower_components/bootstrap/dist/js/bootstrap.min.js');}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{Asset('/admin/bower_components/metisMenu/dist/metisMenu.min.js');}}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{Asset('/admin/dist/js/sb-admin-2.js');}}"></script>

    <!-- DataTables JavaScript -->
    <script src="{{Asset('/admin/bower_components/DataTables/media/js/jquery.dataTables.min.js');}}"></script>
    <script src="{{Asset('/admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js');}}"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->

</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{asset('index/admin')}}">Admin - Hội_LV</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="{{asset('tintuc')}}"><i class="fa fa-user fa-fw"></i> View fond-End</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="{{asset('logout')}}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                     <form role="form" action="research" method="POST">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search..."name="insearch">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                            </div>
                      </form>
                        <!-- /input-group -->
                    </li>
                    <li>
                        <a href="{{asset('index/admin')}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Category<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">List Category</a>
                            </li>
                            <li>
                                <a href="{{asset('add-cate')}}">Add Category</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-cube fa-fw"></i> Page<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{Asset('listpage')}}">List Page</a>
                            </li>
                            <li>
                                <a href="{{Asset('addpage')}}">Add Page</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-users fa-fw"></i> User<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">List User</a>
                            </li>
                            <li>
                                <a href="#">Add User</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <!-- Page Content -->
    <div id="page-wrapper">
        @yield('content')
    </div>
    <!-- /#page-wrapper -->

</div>


</body>

</html>
