@extends('dashboards.templates.templates')

@section('urlPage')
    <p class="hidden lg:block">Dashboard</p>
@endsection


@section('content_dashboard')
    {{-- show info all --}}
    <div class="flex">
        <div class="w-1/4 h-20 bg-green-400 m-2 p-2 flex relative items-center justify-center text-white lg:justify-start">
            <div class="rounded-full h-14 w-14 items-center justify-center bg-green-400 shadow-2xl hidden lg:flex">
                <img src="{{asset('/image/icons/basket_white.svg')}}" alt="" class="w-7 ">
            </div>
            <div class="text-xs text-center lg:text-right lg:px-5 lg:absolute lg:right-0">
                <p class="text-sm font-bold">1500</p>
                <p>product terjual</p>
            </div>
        </div>
        <div class="w-1/4 h-20 bg-green-400 m-2 p-2 flex relative items-center justify-center text-white lg:justify-start">
            <div class="rounded-full h-14 w-14 items-center justify-center bg-green-400 shadow-2xl hidden lg:flex">
                <img src="{{asset('/image/icons/profit_white.svg')}}" alt="" class="w-7 ">
            </div>
            <div class="text-xs text-center lg:text-right lg:px-5 lg:absolute lg:right-0">
                <p class="text-xs lg:text-sm font-bold">Rp.250.000</p>
                <p>keuntungan</p>
            </div>
        </div>
        <div class="w-1/4 h-20 bg-green-400 m-2 p-2 flex relative items-center justify-center text-white lg:justify-start">
            <div class="rounded-full h-14 w-14 items-center justify-center bg-green-400 shadow-2xl hidden lg:flex">
                <img src="{{asset('/image/icons/visitor_white.svg')}}" alt="" class="w-7 ">
            </div>
            <div class="text-xs text-center lg:text-right lg:px-5 lg:absolute lg:right-0">
                <p class="text-sm font-bold">125</p>
                <p>visitor</p>
            </div>
        </div>
        <div class="w-1/4 h-20 bg-green-400 m-2 p-2 flex relative items-center justify-center text-white lg:justify-start">
            <div class="rounded-full h-14 w-14 items-center justify-center bg-green-400 shadow-2xl hidden lg:flex">
                <img src="{{asset('/image/icons/employee _white.svg')}}" alt="" class="w-7 ">
            </div>
            <div class="text-xs text-center lg:text-right lg:px-5 lg:absolute lg:right-0">
                <p class="text-sm font-bold">35</p>
                <p>Employee</p>
            </div>
        </div>
    </div>

    {{-- cart --}}
    <p class="text-center my-5 text-sm lg:text-lg">Grafik</p>
    <div class="lg:flex">
        <div class="w-full lg:w-1/2">
            <canvas id="visitor"></canvas>
        </div>
        <div class="w-full pt-5 lg:pt-0 lg:w-1/2">
            <div class="w-1/2 mx-auto">
                <canvas id="product_seller"></canvas>
            </div>
        </div>
    </div>
    
    {{-- news --}}
    <table class="table-auto text-sm shadow-lg my-20 w-11/12">
        <thead class="bg-green-400 text-white">
            <tr>
                <th class="w-1/6 p-2">Sampul</th>
                <th class="w-1/6" >Title</th>
                <th class="">Content</th>
                <th class="w-1/6">Upload Time</th>
                <th class="w-1/6">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <img src="{{asset('/image/website.png')}}" alt="" class="w-52 p-2">
                </td>
                <td>Rilis Website Es Celdol Yoto</td>
                <td >Rilis / Deploynya website e-commerce individual Es Cendol YotoRilis / Deploynya website e-commerce individual Es Cendol Yoto</td>
                <td class="text-center">12 maret 2020</td>
                <td class="text-center">
                    <a href="">
                        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-4 rounded-full">Detail</button>
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    <img src="{{asset('/image/website.png')}}" alt="" class="w-52 p-2">
                </td>
                <td>Rilis Website Es Celdol Yoto</td>
                <td>Rilis / Deploynya website e-commerce individual Es Cendol Yoto</td>
                <td class="text-center">12 maret 2020</td>
                <td class="text-center">
                    <a href="">
                        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-4 rounded-full">Detail</button>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>



    @section('js')
        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.2.0/dist/chart.min.js"></script>
        <script src="/js/cart/dashboard.js"></script>
    @endsection

@endsection