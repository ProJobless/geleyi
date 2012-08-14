<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />

	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width" />

	<title>
    @section('title')
      Geleyi / Welcome
    @yield_section
  </title>

  {{ Asset::container('header')->scripts(); }}
  {{ Asset::styles(); }}

	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body>
<header>
  <h3>{{ HTML::link("/","Geleyi | Home of African Fashion") }}</h3>
  <ul class="nav-bar">
   @if(!Sentry::check() )
    <li>{{ HTML::link('user/login','Login') }}</li>
    <li>{{ HTML::link('register','Register') }}</li>
   @else
    <li>{{ HTML::link('logout','Logout') }}</li>
   @endif

  </ul>
</header>
<div class="row">
  <div id="content" class="twelve columns centered">
    @yield('content')
  </div>
</div>

{{ Asset::container('footer')->scripts() }}
<!--<script src="--><?php //URL::base()?><!--/js/plugins.js"></script>-->
<!--<script src="--><?php //URL::base()?><!--/js/app.js"></script>-->
@section('footer')
  {{ render('partials.footer') }}
@yield_section
</body>
</html>
