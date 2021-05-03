@extends('templates/myTemplates')

    @section('title','home')

    @section('css')
        <link rel="stylesheet" href="/css/app.css">
    @endsection


    @section('content')
        
        @include('snippets/cartPayment')
        @include('snippets/modalProduct')

        {{-- jumbotron --}}
        <div class="bg-blue-200 lg:grid grid-cols-2 h-96">
            <div class="flex px-16 text-center items-center lg:px-0 lg:pl-40 lg:text-right">
                <div class="sm:justify-center pt-5">
                    <h1 class="text-5xl lg:text-7xl font-medium">Es CenYot</h1>
                    <p class="text-gray-700">Es Cendol Pak Yoto</p>
                    <h1 class="text-xs text-gray-700">rasakan sensasi segernya sebelum kehabisan!</h1>
                    <h1 class="text-xs text-gray-700">Dinginnya Es Cendol kami siap menggugah selera Anda!</h1>
                </div>
            </div>
            <div class="image"></div>
        </div>

        <div id="shopping"></div>
        
        {{-- selling product --}}
        <div class="type_menu_produck text-center justify-between items-center grid grid-cols-5 my-5 lg:px-60">
            <div>
                <button class="bg-green-500 hover:bg-green-600 text-white text-sm lg:text-base lg:py-1 lg:px-5 rounded-full p-1" onmousedown="ChangeNavProduk('Recomended')">Recomend</button>
            </div>
            <div>
                <button class="bg-green-500 hover:bg-green-600 text-white text-sm lg:text-base lg:py-1 lg:px-5 rounded-full p-1" onmousedown="ChangeNavProduk('Special')">Special</button>
            </div>
            <div class="rounded-full flex justify-center lg:bg-white lg:py-6 lg:px-10 lg:-mt-12">
                <img src="{{asset('/image/esCendol_kartun.jpeg')}}" class="w-12 lg:w-60" alt="">
            </div>
            <div>
                <button class="bg-green-500 hover:bg-green-600 text-white text-sm lg:text-base lg:py-1 lg:px-5 rounded-full p-1" onmousedown="ChangeNavProduk('Normal')">Normal</button>
            </div>
            <div>
                <button class="bg-green-500 hover:bg-green-600 text-white text-sm lg:text-base lg:py-1 lg:px-5 rounded-full p-1" onmousedown="ChangeNavProduk('Materials')">Materials</button>
            </div>
        </div>

        {{-- card payment --}}
        {{-- juika pakai backend hapus justify cenetr --}}
        
        <div class="info_btn_payment my-10 text-center text-green-500 font-bold py-2">
            <h1 id="Nav_Produk">Recommended</h1>
        </div>
        
        <div class="flex flex-wrap p-2 lg:h-auto justify-center"> 
            
            <div class="flex" id="Recomended">
                {{-- product recomend --}}
                @foreach ($product_recomend as $record)
                    <div class="text-xs text-center w-24 mx-5 lg:w-28" >
                        <div class="bg-image bg-gray-100 h-36 w-32 h-40 relative lg:h-44" onmouseover="is_showItemProduct('hoverProduct{{$record -> id}}', 'show')" onmouseout="is_showItemProduct('hoverProduct{{$record -> id}}','close')">
                            
                            {{-- btn --}}
                            <div class="pt-5 flex justify-center hidden" id="hoverProduct{{$record -> id}}">
                                <img src="{{asset('image/icons/basket.svg')}}"  class="w-7 pr-2 p-1 shadow-lg bg-white rounded-l-lg cursor-pointer" alt="" onclick="selectProduct('{{$record -> name_product}}','{{$record -> image_product}}')">                    
                                <img src="{{asset('image/icons/maximize.svg')}}" class="w-7 pl-2 p-1 shadow-lg bg-white rounded-r-lg cursor-pointer" alt="" onclick="selectShowProduct('{{$record -> name_product}}', '{{$record -> price_product}}', '{{$record -> image_product}}')">                    
                            </div>

                            <img src="{{$record -> image_product}}" class="z-10 absolute bottom-0 p-2 h-28 lg:h-32 lg:w-full" alt="" />
                        </div>
                        <p class="font-bold">{{$record -> name_product}}</p>
                        <p class="font-bold text-green-500">Rp. {{$record -> price_product}}</p>
                    </div>    
                @endforeach
            </div>


            <div class="flex hidden" id="Special">
                @foreach ($product_special as $record)
                    <div class="text-xs text-center w-24 mx-5 lg:w-28" id="Special" >
                        <div class="bg-image bg-gray-100 h-36 w-32 h-40 relative lg:h-44" onmouseover="is_showItemProduct('hoverProduct{{$record -> id}}', 'show')" onmouseout="is_showItemProduct('hoverProduct{{$record -> id}}','close')">
                            
                            {{-- btn --}}
                            <div class="pt-5 flex justify-center hidden" id="hoverProduct{{$record -> id}}">
                                <img src="{{asset('image/icons/basket.svg')}}"  class="w-7 pr-2 p-1 shadow-lg bg-white rounded-l-lg cursor-pointer" alt="" onclick="selectProduct('{{$record -> name_product}}','{{$record -> image_product}}')">                    
                                <img src="{{asset('image/icons/maximize.svg')}}" class="w-7 pl-2 p-1 shadow-lg bg-white rounded-r-lg cursor-pointer" alt="" onclick="selectShowProduct('{{$record -> name_product}}', '{{$record -> price_product}}', '{{$record -> image_product}}')">                    
                            </div>

                            <img src="{{$record -> image_product}}" class="z-10 absolute bottom-0 p-2 h-28 lg:h-32 lg:w-full" alt="" />
                        </div>
                        <p class="font-bold">{{$record -> name_product}}</p>
                        <p class="font-bold text-green-500">Rp. {{$record -> price_product}}</p>
                    </div>    
                @endforeach
            </div>

            <div class="flex hidden" id="Normal">
                @foreach ($product_normal as $record)
                    <div class="text-xs text-center w-24 mx-5 lg:w-28" >
                        <div class="bg-image bg-gray-100 h-36 w-32 h-40 relative lg:h-44" onmouseover="is_showItemProduct('hoverProduct{{$record -> id}}', 'show')" onmouseout="is_showItemProduct('hoverProduct{{$record -> id}}','close')">
                            
                            {{-- btn --}}
                            <div class="pt-5 flex justify-center hidden" id="hoverProduct{{$record -> id}}">
                                <img src="{{asset('image/icons/basket.svg')}}"  class="w-7 pr-2 p-1 shadow-lg bg-white rounded-l-lg cursor-pointer" alt="" onclick="selectProduct('{{$record -> name_product}}','{{$record -> image_product}}')">                    
                                <img src="{{asset('image/icons/maximize.svg')}}" class="w-7 pl-2 p-1 shadow-lg bg-white rounded-r-lg cursor-pointer" alt="" onclick="selectShowProduct('{{$record -> name_product}}', '{{$record -> price_product}}', '{{$record -> image_product}}')">                    
                            </div>

                            <img src="{{$record -> image_product}}" class="z-10 absolute bottom-0 p-2 h-28 lg:h-32 lg:w-full" alt="" />
                        </div>
                        <p class="font-bold">{{$record -> name_product}}</p>
                        <p class="font-bold text-green-500">Rp. {{$record -> price_product}}</p>
                    </div>    
                @endforeach
            </div>

            <div class="flex hidden" id="Materials">
                @foreach ($product_material as $record)
                    <div class="text-xs text-center w-24 mx-5 lg:w-28">
                        <div class="bg-image bg-gray-100 h-36 w-32 h-40 relative lg:h-44" onmouseover="is_showItemProduct('hoverProduct{{$record -> id}}', 'show')" onmouseout="is_showItemProduct('hoverProduct{{$record -> id}}','close')">
                            
                            {{-- btn --}}
                            <div class="pt-5 flex justify-center hidden" id="hoverProduct{{$record -> id}}">
                                <img src="{{asset('image/icons/basket.svg')}}"  class="w-7 pr-2 p-1 shadow-lg bg-white rounded-l-lg cursor-pointer" alt="" onclick="selectProduct('{{$record -> name_product}}','{{$record -> image_product}}')">                    
                                <img src="{{asset('image/icons/maximize.svg')}}" class="w-7 pl-2 p-1 shadow-lg bg-white rounded-r-lg cursor-pointer" alt="" onclick="selectShowProduct('{{$record -> name_product}}', '{{$record -> price_product}}', '{{$record -> image_product}}')">                    
                            </div>

                            <img src="{{$record -> image_product}}" class="z-10 absolute bottom-0 p-2 h-28 lg:h-32 lg:w-full" alt="" />
                        </div>
                        <p class="font-bold">{{$record -> name_product}}</p>
                        <p class="font-bold text-green-500">Rp. {{$record -> price_product}}</p>
                    </div>    
                @endforeach
            </div>


        </div>
        
        {{-- sub jumbotron --}}
        <div class="container mx-auto my-44 grid lg:grid-cols-2">
            <div>
                <img src="{{asset('/image/jadi_1.png')}}" class="w-60 mx-auto lg:w-96" alt="" />
            </div>
            <div class="my-16 w-3/4 mx-auto text-center lg:mx-0 lg:text-left">
                <h1 class="font-medium text-3xl lg:text-6xl lg:text-4xl">Es Segernya Gak Nahan !!!</h1>
                <p>Makanan Bersih Dan Higienis Sangat Cocok Untuk Segala Jenis Mood</p>
                <p>Pesan Sekarang Maka Akan Diantar Sekarang Melalui Driver Kami Yang Tersedia DiCabang-cabang Tertentu</p>
            </div>
        </div>

        {{-- news --}}
        <div class=" news text-center my-20 mx-5 lg:mx-36">
            <h1 class=" text-2xl">Es Cendol Yoto <span class="font-bold"> Last News </span></h1>
            
            <div class="grid lg:grid-cols-2 lg:py-20 aligs-center ">

                @foreach ($news as $record)
                    <div class="shadow-2xl grid p-5 my-5 lg:mx-5 lg:grid-cols-2 text-left">
                        <img src="{{$record -> image}}" class="mx-auto" alt="" />
                        <div class="newsInfo px-2">
                            <p class="text-gray-400 text-xs">{{$record -> upload_at}}</p>
                            <p class="text-xl">{{$record -> title}}</p>
                            <p class="text-sm my-3 h-16 overflow-hidden ">{{$record -> content}}</p>
                            <button class="text-green-500 text-sm">READ ARTICLE... -></button>
                        </div>
                    </div>    
                @endforeach

            </div>
        </div>    
    @endsection

    
    @section('js')
        <script type="text/javascript"  src='/js/index.js'></script>
        <script type="text/javascript"  src='/js/cart.js'></script>
    @endsection