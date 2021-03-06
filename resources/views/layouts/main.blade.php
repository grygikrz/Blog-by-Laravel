<!DOCTYPE html>
<html><head>
<title>HTML KickStart Elements</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name="description" content="" />
<meta name="copyright" content="" />
<link rel="stylesheet" type="text/css" href="{{asset('css/kickstart.css')}}" media="all" />                  <!-- KICKSTART -->
<link rel="stylesheet" type="text/css" href="{{asset('style.css')}}" media="all" />                          <!-- CUSTOM STYLES -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="{{asset('js/kickstart.js')}}"></script>                                  <!-- KICKSTART -->
</head><body>

<!-- Menu Horizontal -->
<ul class="menu">
<li {{{ (Request::is('start') ? 'class=current' : '') }}} ><a href="{!! url('start') !!}">Start</a></li>
<li {{{ (Request::is('about') ? 'class=current' : '') }}} ><a href="{!! url('about') !!}">About</a></li>
<li {{{ (Request::is('blog') ? 'class=current' : '') }}}><a href="{!! url('blog') !!}"><span class="icon" data-icon="R"></span>Blog</a>
	<ul>
	<li><a href=""><i class="fa fa-car"></i> Sub Item</a></li>
	<li><a href=""><i class="fa fa-arrow-circle-right"></i> Sub Item</a>
		<ul>
		<li><a href=""><i class="fa fa-comments"></i> Sub Item</a></li>
		<li><a href=""><i class="fa fa-check"></i> Sub Item</a></li>
		<li><a href=""><i class="fa fa-cutlery"></i> Sub Item</a></li>
		<li><a href=""><i class="fa fa-cube"></i> Sub Item</a></li>
		</ul>
	</li>
	<li class="divider"><a href=""><i class="fa fa-file"></i> li.divider</a></li>
	</ul>
</li>
<li {{{ (Request::is('contact') ? 'class=current' : '') }}}><a href="{!! url('contact') !!}">Contact</a></li>
</ul>

<div class="grid">
	
<!-- ===================================== END HEADER ===================================== -->
	 
<div class="col_12">
@yield('content')
</div>

</div><!-- END GRID -->

<!-- ===================================== START FOOTER ===================================== -->
<div class="clear"></div>
<div id="footer">
&copy; Copyright 2011–2012 All Rights Reserved. This website was built with <a href="http://www.99lime.com">HTML KickStart</a>
</div>

</body></html>