@extends('dashboards.templates.templates')

@section('urlPage')
    <p class="hidden lg:block">Dashboard / product / detail</p>
@endsection

@section('content_dashboard')

	<div class="h-screen w-10/12 mx-auto">


		<div class=" border shadow-2xl rounded-2xl bg-gray-100 h-96 my-20 p-10 flex">

			<img src="{{$product -> image_product}}" alt="" class="w-1/2">

			<div class="ml-10">
				<div class="flex my-5">
					<p class="w-32">ID Product</p>
					<p>: {{$product -> id}}</p>
				</div>
				<div class="flex my-5">
					<p class="w-32">Name Product</p>
					<p>: {{$product -> name_product}}</p>
				</div>
				<div class="flex my-5">
					<p class="w-32">Price</p>
					<p>: Rp.{{$product -> price_product}}</p>
				</div>
				<div class="flex my-5">
					<p class="w-32">Launch</p>
					<p>: {{$product -> upload_at}}</p>
				</div>
			</div>
			
		</div>

		<div class="flex justify-end">
			<a href="/dashboard/product">
				<button type="submit" class="border border--500 text-gray-100 bg-blue-500 block rounded-sm font-bold py-2 px-7 flex items-center text-xs mr-2 hover:bg-blue-600">Back</button>		
			</a>
		</div>

	</div>


@stop