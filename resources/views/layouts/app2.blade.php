<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Buscador QR</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <script type="text/javascript" src="{{ asset('js.validacionInputs.js') }}"></script>

</head>
<body background="IMG/QR4.jpg">

    @yield('content')


    <script type="text/javascript" src="{{ asset('js.jquery.js') }}"></script>
    <script>window.jQuery || document.write('<script src="{{ asset('js.jquery.js') }}"><\/script>')</script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>