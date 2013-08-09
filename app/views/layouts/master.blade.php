<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description" content="Geleyi is an exclusive platform for African fashion business - providing a simple marketplace for emerging African fashion designers to market and sell products, and for consumers to access to a wider range of African fashion.">
    <meta name="p:domain_verify" content="2382a8e3f52488e5853666dd74d71cd5"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <title>Geleyi: Defining African Fashion</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/devices.css') }}" />
    <script src="{{ asset('js/sys/css3-mediaqueries.js') }}"></script>

    <!--[if lt IE 9]>
    {{ asset('js/sys/ie8.canvas-support.js') }}
    <script>
        document.createElement('header');
        document.createElement('nav');
        document.createElement('section');
        document.createElement('article');
        document.createElement('aside');
        document.createElement('footer');
    </script>
    <![endif]-->

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="{{ asset('js/sys/plugins.js') }}"></script>
    <script src="{{ asset('js/sys/os.js') }}"></script>

    <script src="{{ asset('js/config.js') }}"></script>
    <script src="{{ asset('js/func.js') }}"></script>

    <script src="{{ asset('js/parallax.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>


</head>

<body>

@yield('main')

<div id="ct" style="display:none"></div>
<!-- GA Code -->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-39559273-1', 'geleyi.com');
    ga('send', 'pageview');

</script>
</body>
</html>