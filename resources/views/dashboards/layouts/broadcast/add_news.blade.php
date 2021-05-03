@extends('dashboards.templates.templates')

@section('urlPage')
    <p class="hidden lg:block">Dashboard / broadcast / add</p>
@endsection

@section('content_dashboard')

	<div class="h-screen">
		
		<form action="/dashboard/broadcast/add" method="POST" role="form" enctype="multipart/form-data">
			@csrf
		
			<div class="mt-20 mb-10">
				<div class='flex'>
					<div class="w-1/2 pr-10">	
						<p>Title</p>
						<input type="text" name='title' placeholder="title" class="border p-1 w-full">
					</div>
					<div class="w-1/2 pr-10">	
						<p>Image</p>
						<input type="file" name='image' onchange="livePreviewImage(this)">
					</div>
				</div>

				<div class="flex mt-10">
					<div class="w-1/2 pr-10">
						<p>Content</p>
						<textarea name="content" id="" rows="10" placeholder="content" class="border w-full p-1"></textarea>
					</div>
					<div class="hidden" id="img_preview">
						<p>Preview</p>
						<img src="#" alt="" class="h-32 mt-5" id="showImg">
					</div>
				</div>

			</div>

			<div class="flex">
				<a href="/dashboard/broadcast">
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