@extends('dashboards.templates.templates')

@section('urlPage')
    <p class="hidden lg:block">Dashboard / product / add</p>
@endsection

@section('content_dashboard')
	
	<div class="h-screen">
		
		<form action="/dashboard/product/add" method="POST" role="form" enctype="multipart/form-data">
			@csrf
		
			<div class="mt-20 mb-10">
				<div class='flex'>
					<div class="w-1/2 pr-10">	
						<p>Product Name</p>
						<input type="text" name='product_name' placeholder="Name" class="border p-1 w-full">
					</div>
					<div class="w-1/2 pr-10">
						<p>Product Type</p>
						<select class="w-full p-2 bg-gray-200" name="product_type">
						  <option value="Recomend">Recomend</option>
						  <option value="Special">Special</option>
						  <option value="Normal">Normal</option>
						  <option value="Material">Material</option>
						</select>
					</div>
					
				</div>

				<div class="flex mt-10">
					<div class="w-1/2 pr-10">
						<p>Image Product</p>
						<input type="file" name='product_image' onchange="livePreviewImage(this)">
					</div>
					<div class="w-1/2 pr-10">
						<p>Product Price</p>
						<input type="number" name='product_price' placeholder="Price" class="border p-1 w-full">
					</div>
				</div>

				<div class="flex mt-10">
					
					<div class="hidden" id="img_preview">
						<p>Preview</p>
						<img src="#" alt="" class="h-32 mt-5" id="showImg">
					</div>
				</div>

			</div>

			<div class="flex">
				<a href="/dashboard/product">
					<button type="button" class="border border--500 text-gray-100 bg-blue-500 block rounded-sm font-bold py-2 px-5 flex items-center text-xs mr-2 hover:bg-white hover:text-green-500">Cancel</button>
				</a>
				<button type="submit" class="border border--500 text-gray-100 bg-green-500 block rounded-sm font-bold py-2 px-5 flex items-center text-xs mr-2 hover:bg-white hover:text-green-500">Submit</button>		
			</div>
		</form>

	</div>
@stop

@section('js')
	<script src="/js/dashboard/product/add.js"></script>
@stop