<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GES-FORMATION</title>
    <style>

    </style>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>
    @include('partials.nav')
    @yield('content')
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"> </script>
</body>

</html>