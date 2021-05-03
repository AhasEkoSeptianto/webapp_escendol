<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="/css/app.css">
    @yield('css')
    <link rel="stylesheet" href="/css/dashboard.css">
</head>
<body class="font-sans text-gray-600 ">
    

    <div class="grid grid-cols-5">
        {{-- left --}}
        @include('dashboards.snippets.navbar')

        {{-- right --}}
        <div class="col-span-5 mx-5 lg:col-span-4">
            {{-- togle nav for mobile --}}
            <div class="grid grid-cols-2 items-center my-3 p-3 bg-gray-100 ">
                <img src="{{asset('/image/icons/navbar-open.svg')}}" alt="" class="w-5 lg:hidden" onclick="navDashboard('open')">
                @yield('urlPage')
                <div class="justify-self-end flex">
                    <img src="{{asset('/image/icons/bell.svg')}}" alt="" class='w-5 mx-1'>
                    <img src="{{asset('/image/logo.png')}}" alt="" class="w-5 mx-1">
                </div>
            </div>

            @yield('content_dashboard')

        </div>

    </div>

    @yield('js')
    <script src="/js/dashboard.js"></script>
</body>
</html>