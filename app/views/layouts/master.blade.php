<!DOCTYPE html>
<!--[if IE 8]>
<html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width"/>
    <title>Geleyi: African Fashion. Simple. Beautiful. Joyful.</title>
    <meta name="description" content="Geleyi is an online marketplace and business incubator for African-inspired designs. We help designers grow their businesses and provide a brand new shopping experience for consumers to explore the wider range of Africa-inspired fashion. We partner with designers and other servicing firms to create a new market for African-inspired designs.">
    <link rel="stylesheet" href="build/css/normalize.css?v=1.0.0"/>
    <link rel="stylesheet" href="build/css/app.css?v=1.0.0"/>
    <script src="dependencies/custom.modernizr.js?v=1.0.0"></script>

</head>

<body>
<!-- background image -->
<div id="bg">
    <img alt="" src="build/images/bg.jpg"/>
</div>

<div id="geleyi-app">
    @yield('geleyi-app')
</div>


</body>


<script src="build/application.js"></script>
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
