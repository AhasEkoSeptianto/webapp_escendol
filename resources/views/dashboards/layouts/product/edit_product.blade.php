@extends('dashboards.templates.templates')

@section('urlPage')
    <p class="hidden lg:block">Dashboard / product / edit</p>
@endsection

@section('content_dashboard')
	
	<div class="h-screen">

		<p class="my-10 text-2xl font-bold text-gray-500">Edit Product</p>

		<form action="/dashboard/product/edit/{{$product -> id}}" method="POST" role="form" enctype= multipart/form-data laravel>
			@csrf
		
			<div class="mt-10 mb-10">

				<div class='flex'>
					<div class="w-1/2 pr-10">	
						<p>ID Product</p>
						<input type="text" name="product_ID" placeholder="ID" disabled value="{{$product -> id}}" class="border p-1 w-full bg-gray-100">
					</div>
					<div class="w-1/2 pr-10">	
						<p>Product Name</p>
						<input type="text" placeholder="Name" name="product_name" class="border p-1 w-full" value="{{$product -> name_product}}">
					</div>
					
				</div>

				<div class="flex mt-10">
					<div class="w-1/2 pr-10">
						<p>Product Image</p>
						<input type="file" name="product_image" onchange="livePreviewImage(this)">
						@error('product_image')
							{{ $message }}
						@enderror
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
					<div class="w-1/2">
						<p>Preview</p>
						<img src="{{$product -> image_product}}" alt="" id="showImg" class="h-32 mt-5">
					</div>
					<div class="w-1/2 pr-10">
						<p>Product Price</p>
						<input type="number" placeholder="Price" name="product_price" value="{{$product -> price_product}}" class="border p-1 w-full">
					</div>
				</div>

			</div>

			<div class="flex justify-end mr-10">
				<a href="/dashboard/product">
					<button type="button" class="border border--500 text-gray-100 bg-blue-500 block rounded-sm font-bold py-2 px-5 flex items-center text-xs mr-2 hover:bg-white hover:text-green-500">Cancel</button>
				</a>
				<button type="submit" class="border border--500 text-gray-100 bg-green-500 block rounded-sm font-bold py-2 px-5 flex items-center text-xs mr-2 hover:bg-white hover:text-green-500">Submit</button>		
			</div>
		</form>

	</div>
@stop

@section('js')
	<script type="text/javascript" src="/js/dashboard/product/edit.js"></script>
@stop