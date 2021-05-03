{{-- nav left --}}
<div class="bg-gray-100 col-span-1 hidden lg:block" id="nav_dashboard">
    <div class="w-full flex justify-end p-2" id="nav_close_mobile">
        <img src="{{asset('/image/icons/cancel.svg')}}" alt="" class=" w-4" onclick="navDashboard('close')">
    </div>
    {{-- profile --}}
    <div class="py-5 text-center">
        <img src="{{asset('/image/logo.png')}}" alt="" class="w-20 mx-auto my-3">
        <p>ES CENYOT</p> 
    </div>

    {{-- menu --}}
    <ul class="mt-8">
        <a href="/dashboard">
            <li class="flex items-center px-8 py-2 {{Request::is('dashboard') ? 'bg-green-200' : ''}} hover:bg-green-200">
                <img src="{{asset('/image/icons/dashboard.svg')}}" alt="" class="w-4">
                <p class="ml-5">Dashboard</p>
            </li>
        </a>
        <a href="/dashboard/product">
            <li class="flex items-center px-8 py-2 {{Request::is('dashboard/product*') ? 'bg-green-200' : ''}} hover:bg-green-200">
                <img src="{{asset('/image/icons/product.svg')}}" alt="" class="w-4">
                <p class="ml-5">Product</p>
            </li>
        </a>
        <a href="/dashboard/broadcast">
            <li class="flex items-center px-8 py-2 {{Request::is('dashboard/broadcast*') ? 'bg-green-200' : '' }} hover:bg-green-200">
                <img src="{{asset('/image/icons/broadcast.svg')}}" alt="" class="w-4">
                <p class="ml-5">Broadcast</p>
            </li>
        </a>
        <a href="/dashboard/profit">
            <li class="flex items-center px-8 py-2 {{Request::is('dashboard/profit*') ? 'bg-green-200' : '' }} hover:bg-green-200">
                <img src="{{asset('/image/icons/profit.svg')}}" alt="" class="w-4">
                <p class="ml-5">Profit</p>
            </li>
        </a>
        <li class="flex items-center px-8 py-2 hover:bg-green-200">
            <img src="{{asset('/image/icons/visitor.svg')}}" alt="" class="w-4">
            <p class="ml-5">Visitor</p>
        </li>
        <li class="flex items-center px-8 py-2 hover:bg-green-200">
            <img src="{{asset('/image/icons/employee.svg')}}" alt="" class="w-4">
            <p class="ml-5">Employee</p>
        </li>
        <li class="flex items-center px-8 py-2 hover:bg-green-200">
            <img src="{{asset('/image/icons/settings.svg')}}" alt="" class="w-4">
            <p class="ml-5">Settings</p>
        </li>
    </ul>

</div>