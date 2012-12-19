<!DOCTYPE html>
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<title>Geleyi :: home of African Fashion</title>

	<!-- Included CSS Files -->

  {{ Basset::show('header.css') }}
  {{ Basset::show('header.js') }}
</head>
<body>

	<div class="row">
    <div class="twelve columns">
      @yield('content')
    </div>
	</div>

{{ Basset::show('foundation.js') }}
{{ Basset::show('app.js') }}
</body>
</html>
