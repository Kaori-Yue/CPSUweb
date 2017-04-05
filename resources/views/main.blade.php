<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Department of Computing</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Kanit:400,700&amp;subset=thai" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
</head>
<body>
    <div id="container">
        <div id="header">
            @include('_nav')
        </div>
        <div id="body">
            @yield('content')
        </div>
        <div id="footer">
            @include('_footer')
        </div>
    </div>
</body>
</html>