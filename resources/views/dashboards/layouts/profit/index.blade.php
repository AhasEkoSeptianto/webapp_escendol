@extends('dashboards.templates.templates')

@section('urlPage')
    <p class="hidden lg:block">Dashboard / profit</p>   
@endsection

@section('content_dashboard')

    
    {{-- show all info --}}
    <div class="flex">
        <div class="w-1/3 h-20 shadow-lg bg-green-400 m-2 p-2 flex relative items-center justify-center text-white lg:justify-start">
            <div class="rounded-full h-14 w-14 items-center justify-center bg-green-400 shadow-2xl hidden lg:flex">
                <img src="{{asset('/image/icons/calendar.svg')}}" alt="" class="w-7 ">
            </div>
            <div class="text-xs  text-center lg:text-right lg:px-5 lg:absolute lg:right-0">
                <p class="text-sm font-bold">1500</p>
                <p class="font-bold">Profit this Years</p>
            </div>
        </div>
        <div class="w-1/3 h-20 shadow-lg bg-green-400 m-2 p-2 flex relative items-center justify-center text-white lg:justify-start">
            <div class="rounded-full h-14 w-14 items-center justify-center bg-green-400 shadow-2xl hidden lg:flex">
                <img src="{{asset('/image/icons/calendar.svg')}}" alt="" class="w-7 ">
            </div>
            <div class="text-xs text-center lg:text-right lg:px-5 lg:absolute lg:right-0">
                <p class="text-xs lg:text-sm font-bold">Rp. <span id='profit_info_month'>250.000</span></p>
                <p class="font-bold">Profit this Month</p>
            </div>
        </div>
        <div class="w-1/3 h-20 shadow-lg bg-green-400 m-2 p-2 flex relative items-center justify-center text-white lg:justify-start">
            <div class="rounded-full h-14 w-14 items-center justify-center bg-green-400 shadow-2xl hidden lg:flex">
                <img src="{{asset('/image/icons/calendar.svg')}}" alt="" class="w-7 ">
            </div>
            <div class="text-xs text-center lg:text-right lg:px-5 lg:absolute lg:right-0">
                <p class="text-sm font-bold">125</p>
                <p class="font-bold">Profit today</p>
            </div>
        </div>
    </div>

    {{-- grafik income --}}
    <div class="flex mt-5 p-3 border shadow-lg divide-x">
        <div class="w-1/2 p-5" id='canvas_profit'>
            <canvas id="profit"></canvas>
        </div>
        <div class="w-1/2 mx-auto">
            <div class="flex justify-between items-center p-2 text-gray-100 text-green-400 px-20 font-bold">
                <span class="px-5 cursor-pointer border border-green-400 rounded bg-green-500 text-white" onclick="setIncome('days_grafik',this)" id='days_grafik_income'>Days</span>
                <span class="px-5 cursor-pointer border border-green-400 rounded" onclick="setIncome('monthly_grafik',this)" id="monthly_grafik_income">Monthly</span>
                <span class="px-5 cursor-pointer border border-green-400 rounded" id='years_grafik_income' onclick="setIncome('years_grafik',this)">Years</span>
            </div>

            <div class="pl-5 mt-2 text-sm overflow-auto max-h-56 whitespace-normal">
                <table class="table-auto w-full text-center">
                  <thead>
                    <tr >
                      <th class="border w-1/3" id='time_table_income'>day</th>
                      <th class="border w-1/3">Product sold</th>
                      <th class="border w-1/3">Payment</th>
                    </tr>
                  </thead>
                  <tbody id='income_table'>
                    
                  </tbody>
                </table>
            </div>
        </div>    
    </div>

    {{-- grafik product sold --}}
    <div class="flex mt-5 mb-20 p-3 border shadow-lg divide-x">
        <div class="w-1/2 p-5" id='canvas_tranksaksi'>
            <canvas id="produck"></canvas>
        </div>
        <div class="w-1/2 mx-auto">
            <div class="flex justify-between items-center p-2 text-gray-100 text-green-400 px-20 font-bold">
                <span class="px-5 cursor-pointer border border-green-400 rounded bg-green-500 text-white" onclick="setSoldProductType('days_grafik', this)" id="days_grafik_soldProduct">Days</span>
                <span class="px-5 cursor-pointer border border-green-400 rounded" onclick="setSoldProductType('monthly_grafik', this)" id='month_grafik_soldProduct'>Monthly</span>
                <span class="px-5 cursor-pointer border border-green-400 rounded" onclick="setSoldProductType('years_grafik', this)" id='years_grafik_soldProduct'>Years</span>
            </div>

            <div class="pl-5 mt-2 text-sm overflow-auto max-h-56 whitespace-normal">
                <table class="table-auto w-full text-center">
                  <thead>
                    <tr >
                      <th class="border" id='time_table_soldProduct'>day</th>
                      <th class="border">Product Type</th>
                      <th class="border">Product Sold</th>
                      <th class="border">Payment</th>
                    </tr>
                  </thead>
                  <tbody id='product_table'>
                    
                  </tbody>
                </table>
            </div>
        </div>    
    </div>


    
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.2.0/dist/chart.min.js"></script>
    <script type="text/javascript" src="/js/dashboard/profit/index.js"></script>
    <script type="text/javascript" src="/js/dashboard/profit/db.js"></script>
    <script type="text/javascript" src="/js/dashboard/profit/update_grafik.js"></script>
@stop
