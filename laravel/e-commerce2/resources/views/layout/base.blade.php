<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset("assets/icones/fontawesome/css/all.min.css") }}">
    <link rel="stylesheet" href="{{ URL::asset("assets/bootstrap/css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ URL::asset("assets/css/styles.css") }}">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-commerce</title>
</head>
<body>

    @yield('content')

    <script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>

</body>
</html>