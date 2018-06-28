<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nosso site - @yield('title')</title>
    <link rel="stylesheet" tyoe="tect/css" href="{{URL::to('dist/css/bootstrap.min.css')}}">
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
    <script type="text/javascritpt" src="{{URL::to('js/jquery.min.js')}}"></script>
    <script type="text/javascritpt" src="{{URL::to('dist/js/bootstrap.min.js')}}"></script>
</body>
</html>