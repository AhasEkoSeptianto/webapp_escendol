@extends('templates/myTemplates')

    @section('title','about')

    @section('css')
        <link rel="stylesheet" href="/css/about.css">
    @endsection

    @section('content')
        <div class="mx-40 py-16">
            <h1 class="text-2xl mb-5">About Us</h1>

            <div class="w-1/2 my-10 mx-auto transform transition duration-150 hover:shadow-2xl hover:scale-105 relative">
                <div class="absolute transition duration-700 bg-black h-full w-full rounded-lg opacity-40 text-white" id="imageOwnerbg"></div>
                <div class="absolute w-full h-full transition duration-700 hover:opacity-0" onmouseover="animPictOwner('in')" onmouseout="animPictOwner('out')">
                    <p class="flex w-full h-full justify-center items-center text-white text-sm font-bold">Owner ES CENYOT</p>
                </div>
                <img src="{{asset('/image/about/owner with grobak.jpeg')}}" alt="" id="imageOwner" class="rounded-lg">
            </div>
            
            <h3 class="text-sm">ES CENYOT hadir membawa inovasi baru dengan minuman tradisional yakni CENDOL, ES CENYOT resmi berdiri sejak 23 September 1987, ES CENYOT sudah berkembang sejak saat dari saat itu sampai saat ini</h3>
            
            <h1 class="text-2xl mt-10 mb-2">Tentang Perjalanan</h1>
            <h3 class="text-sm">Berawal dari tahun 1987 yang dimana ES CENYOT dijual seharga Rp.500 hingga saat ini dengan nominal harga Rp.8000, lokasi penjualan pertamakali yakni didaerah KRANJI BEKASI KOTA, telah memulai memadukan sistem informasi teknologi sejak tahun 2019 dan memiliki beberapa cabang dibeberapa tempat : bekasi (pusat), jakarta, depok, cikarang</h3>

            <h1 class="text-2xl mt-10 mb-2">Suasana Restoran</h1>
            
        </div>
    @endsection

    @section('js')
        <script src="/js/about.js"></script>
    @endsection