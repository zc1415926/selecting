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

<div class="container">
    <div class="alert alert-danger alert-dismissible fade in" role="alert">
        <h1>@yield('title')</h1>
        <h4>@yield('description')</h4>
        <p>
            {{ link_to_route('home', '回首页', null, ['class' => 'btn btn-danger']) }}
        </p>
    </div>
</div>

@include('layouts.partials.footer')

<!-- jquery.min.js must at the front of the bootstrap.min.js -->
<script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script>$('#flash-overlay_modal').modal();</script>
</body>
</html>