<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>

    <link rel="stylesheet" href="/css/app.css">
</head>
<body class="bg-gray-100 font-sans h-screen flex justify-center items-center">
    <div class="bg-white h-max w-3/4 rounded-lg shadow-2xl mt-20 p-10 lg:flex lg:h-3/4 lg:mt-0 lg:divide-x">
        <div class="w-full p-10 hidden justify-center items-center lg:w-1/2 lg:flex flex-col ">
            <img src="{{asset('/image/logo_login.png')}}" alt="" class='w-2/3'>
            <p class="text-sm text-gray-500">change your password regularly</p>
        </div>
        <div class="w-full p-1 flex flex-col justify-center lg:w-1/2 lg:p-10">

            <span class="w-8 h-2 border-t-2 border-green-500"></span>
            <p class="text-left">Login as Admin</p>

            <form action="{{ route('login') }}" method="post" class="mt-10">
                @csrf

                <div class="flex border border-gray-300 py-2 px-4 my-4 rounded-full">
                    <input type="email" name="email" class="w-full outline-none" placeholder="username" value="{{ old('email') }}">
                    <img src="{{asset('/image/icons/user.svg')}}" alt="" class="h-5">
                </div>

                <div class="flex border border-gray-300 py-2 px-4 my-4 rounded-full">
                    <input type="password" name="password" class="w-full outline-none" placeholder="password">
                    <img src="{{asset('/image/icons/password.svg')}}" alt="" class="h-5">
                </div>

                <button type="submit" class="bg-green-500 w-full hover:bg-green-700 text-white py-2 px-4 rounded-full">Login</button>
                <p class="text-sm my-3 text-center text-gray-400">Forget your password?</p>
                <p class="text-center my-3 text-xs text-blue-500"><a href="#">Get Help Signed In</a></p>
            </form>

        </div>
    </div>
</body>
</html>