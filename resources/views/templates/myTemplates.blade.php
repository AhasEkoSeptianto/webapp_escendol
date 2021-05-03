<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @yield('css')
    <link rel="stylesheet" href="/css/app.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
</head>
<body class="text-gray-600 font-sans">

    @include('snippets/navbar')

    @yield('content')

    @include('snippets.footer')

    @yield('js')



    <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
    <script src="https://maps.googleapis.com/maps/api/jskey=AIzaSyC4NNeHbNb1_nFhKnckNxMKpxXeQUecenM&libraries=places"  async defer></script>
    <script src="/js/index.js"></script>

</body>
</html>