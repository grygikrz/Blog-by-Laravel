<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Bootstrap 3 Admin</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="{{asset('admin/css/styles.css')}}" rel="stylesheet">
	</head>
	<body>
<!-- header -->
<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Dashboard</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-user"></i> Admin <span class="caret"></span></a>
                    <ul id="g-account-menu" class="dropdown-menu" role="menu">
                        <li><a href="#">My Profile</a></li>
                    </ul>
                </li>
                <li><a href="#"><i class="glyphicon glyphicon-lock"></i> Logout</a></li>
            </ul>
        </div>
    </div>
    <!-- /container -->
</div>
<!-- /Header -->

<!-- Main -->
<div class="container-fluid">


 <div class="row">
        <div class="col-sm-3">
            <!-- Left column -->
            <a href="#"><strong><i class="glyphicon glyphicon-wrench"></i> Tools</strong></a>

            <hr>

            <ul class="nav nav-stacked">
                <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#userMenu">Settings <i class="glyphicon glyphicon-chevron-down"></i></a>
                    <ul class="nav nav-stacked collapse in" id="userMenu">
                        <li {{{ (Request::is('admin/start') ? 'class=active' : '') }}} > <a href="{!! url('admin/start') !!}"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                        <li {{{ (Request::is('admin/addpost') ? 'class=active' : '') }}} ><a href="{!! url('admin/addpost') !!}"><i class="glyphicon glyphicon-envelope"></i> Messages <span class="badge badge-info">4</span></a></li>
                        <li {{{ (Request::is('admin/start1') ? 'class=active' : '') }}} ><a href="{!! url('admin/start1') !!}"><i class="glyphicon glyphicon-cog"></i> Options</a></li>
                        <li {{{ (Request::is('admin/start2') ? 'class=active' : '') }}} ><a href="{!! url('admin/start2') !!}"><i class="glyphicon glyphicon-comment"></i> Shoutbox</a></li>
                        <li {{{ (Request::is('admin/start3') ? 'class=active' : '') }}} ><a href="{!! url('admin/start3') !!}"><i class="glyphicon glyphicon-user"></i> Staff List</a></li>
                        <li {{{ (Request::is('admin/start4') ? 'class=active' : '') }}} ><a href="{!! url('admin/start4') !!}"><i class="glyphicon glyphicon-flag"></i> Transactions</a></li>
                        <li {{{ (Request::is('admin/start5') ? 'class=active' : '') }}} ><a href="{!! url('admin/start5') !!}"><i class="glyphicon glyphicon-exclamation-sign"></i> Rules</a></li>
                        <li {{{ (Request::is('admin/start6') ? 'class=active' : '') }}} ><a href="{!! url('admin/start6') !!}"><i class="glyphicon glyphicon-off"></i> Logout</a></li>
                    </ul>
                </li>
                <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#menu2"> Reports <i class="glyphicon glyphicon-chevron-right"></i></a>

                    <ul class="nav nav-stacked collapse" id="menu2">
                        <li><a href="#">Information &amp; Stats</a>
                        </li>
                        <li><a href="#">Views</a>
                        </li>
                        <li><a href="#">Requests</a>
                        </li>
                        <li><a href="#">Timetable</a>
                        </li>
                        <li><a href="#">Alerts</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">
                    <a href="#" data-toggle="collapse" data-target="#menu3"> Social Media <i class="glyphicon glyphicon-chevron-right"></i></a>
                    <ul class="nav nav-stacked collapse" id="menu3">
                        <li><a href=""><i class="glyphicon glyphicon-circle"></i> Facebook</a></li>
                        <li><a href=""><i class="glyphicon glyphicon-circle"></i> Twitter</a></li>
                    </ul>
                </li>
            </ul>

            <hr>
        </div>
        <!-- /col-3 -->

        <div class="col-sm-9">
   
@yield('content')

        </div>

    </div>


</div>
<!-- /Main -->

<footer class="text-center">This Bootstrap 3 dashboard layout is compliments of <a href="http://www.bootply.com/85850"><strong>Bootply.com</strong></a></footer>

<div class="modal" id="addWidgetModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Add Widget</h4>
            </div>
            <div class="modal-body">
                <p>Add a widget stuff here..</p>
            </div>
            <div class="modal-footer">
                <a href="#" data-dismiss="modal" class="btn">Close</a>
                <a href="#" class="btn btn-primary">Save changes</a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dalog -->
</div>
<!-- /.modal -->
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('admin/js/scripts.js')}}"></script>
	</body>
</html>