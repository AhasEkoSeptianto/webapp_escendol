{{-- navbar --}}
<nav class="grid px-5 sm:grid-cols-1 shadow z-20 lg:grid-cols-2 lg:px-10 ">
    <div class="flex justify-start">
        <img src="{{ asset('image/logo.png') }}" class="w-14" alt="" />
        <h1 class='p-4'>Es Cendol Yoto</h1>
    </div>
    <div class="flex justify-end" id="navDekstop">
        <ul class="flex">
            <a href="/" class='p-4 hover:bg-blue-100'>Home</a>
            <a href="/about" class='p-4 hover:bg-blue-100'>About</a>
            <a href="/#shopping" class='p-4 hover:bg-blue-100'>Shop</a>
            <a href="/#contact" class='p-4 hover:bg-blue-100'>Contact Us</a>
        </ul>
    </div>
</nav>