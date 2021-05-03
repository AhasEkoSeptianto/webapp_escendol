{{-- footer --}}
<div class="footer mx-auto bg-gray-200 grid p-5 pt-20 lg:grid-cols-4 lg:p-20">
    <div class="footer_left w-3/4 lg:col-span-2 lg:px-20 lg:w-full">
        <div class="head border-b-2 border-green-400 pb-2 lg:w-1/2 ">
            <h1 class='text-2xl font-medium'>Es Cendol <span class="font-bold">Pak Yoto</span></h1>
        </div>
        <div class="pt-10 text-xs lg:w-2/3">
            <p>Hubungi kami untuk info lebih lanjut dan jangan lupa ikuti fanspage resmi kami tersedia pada akun jejaring sosial media berikut agar selalu mendapatkan informasi terupdate</p>
            {{-- sosial media --}}
            <ul class="pt-5">
                <li class="px-2 border-b-2 border-gray-300 hover:bg-gray-300">
                    <a href="" class="py-2 flex">
                        <img src="{{asset('image/icons/gmail.svg')}}" class="w-5" alt="">
                        <p class="ml-3">CendolYoto@gmail.com</p>
                    </a>
                </li>
                <li class="px-2 border-b-2 border-gray-300 hover:bg-gray-300">
                    <a href="" class="py-2 flex">
                        <img src="{{asset('image/icons/instagram.svg')}}" class="w-5" alt="">
                        <p class="ml-3">CendolYoto</p>
                    </a>
                </li>
                <li class="px-2 border-b-2 border-gray-300 hover:bg-gray-300">
                    <a href="" class="py-2 flex">
                        <img src="{{asset('image/icons/whatsapp.svg')}}" class="w-5" alt="">
                        <p class="ml-3">085351196080</p>
                    </a>
                </li>
            </ul>
                
        </div>
    </div>
    <div class="my-20 w-3/4 lg:my-0 lg:w-full">
        <div class="head border-b-2 border-green-400 lg:w-2/3 pb-2 ">
            <h1 class='text-3xl font-medium'>Link Cepat</h1>
        </div>
        <div class="pt-10 w-2/3 text-sm">
            <ul>
                <li class="px-2 border-b-2 border-gray-300 hover:bg-gray-300">
                    <a href="" class="py-2 flex">
                        <p>about <span class="font-bold">ES CENYOT</span></p>
                    </a>
                </li>
                <li class="px-2 border-b-2 border-gray-300 hover:bg-gray-300">
                    <a href="" class="py-2 flex">
                        <p>Top Seller</p>
                    </a>
                </li>
                <li class="px-2 border-b-2 border-gray-300 hover:bg-gray-300">
                    <a href="" class="py-2 flex">
                        <p>All Product</p>
                    </a>
                </li>
                <li class="px-2 border-b-2 border-gray-300 hover:bg-gray-300">
                    <a href="" class="py-2 flex">
                        <p>Our Blog</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="w-3/4 lg:w-full">
        <div class="head border-b-2 border-green-400 pb-2 lg:w-2/3 ">
            <h1 class='text-3xl font-medium'>Location</h1>
        </div>
        <div class="pt-10 w-2/3">
            <div id="Map" class="w-72 h-60"></div>
        </div>
    </div>
</div>

{{-- copyright --}}
<div class="bg-gray-200 px-12 py-5 text-gray-500 lg:text-center grid lg:grid-cols-2" id="contact">
    <p>@2021 escenyot.com, made with &#10084; by owner, all right reverse</p>
    <ul class="hidden lg:flex  lg:justify-center ">
        <li class="mx-4 hover:text-gray-900"><a href="#">contact us</a></li>
        <li class="mx-4 hover:text-gray-900"><a href="#">term of use</a></li>
        <li class="mx-4 hover:text-gray-900"><a href="#">site map</a></li>
        <li class="mx-4 hover:text-gray-900"><a href="#">privacy policy</a></li>
    </ul>
</div>


<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
<script src="https://maps.googleapis.com/maps/api/jskey=AIzaSyC4NNeHbNb1_nFhKnckNxMKpxXeQUecenM&libraries=places"  async defer></script>
