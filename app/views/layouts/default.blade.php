<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <title>Selecting</title>
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.2/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/jumbotron.css"/>
    <!--[if lt IE 9]>
        <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <scritp src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></scritp>
    <![endif]-->
</head>
<body>
    @include('layouts.partials.nav')
    @yield('content')
    @include('layouts.partials.footer')

    <script src="http://cdn.bootcss.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
</body>
</html>