<div class="z-20 h-screen w-screen fixed flex items-center justify-center left-0 top-0 hidden" id="modal">
	{{-- manipulate background black --}}
	<div class="h-screen w-screen fixed bg-black opacity-50">
		
	</div>

	{{-- content --}}
	<div class="bg-gray-100 relative shadow-2xl p-10 rounded-2xl w-10/12 lg:w-1/2 lg:flex">
		<img src="#" alt="" id="modal_product_image" class="h-52 w-52 mx-auto">

		<div class="lg:ml-10">
			<div class="h-1/2">
				<div class="flex my-5">
					<p class="w-32">Name Product</p>
					<p class="truncate">: <span id="modal_product_name"></span></p>
				</div>
				<div class="flex my-5">
					<p class="w-32">Price</p>
					<p>: Rp.<span id="modal_product_price"></span></p>
				</div>
			</div>
			<div class="lg:absolute bottom-0 right-0 lg:m-10">
				<button class="border border--500 text-gray-100 bg-green-500 block rounded-sm font-bold py-2 px-5 flex items-center text-xs mr-2 hover:bg-green-600" onclick="document.getElementById('modal').style.display = 'none' ">Close</button>
			</div>

		</div>
		
	</div>
</div>