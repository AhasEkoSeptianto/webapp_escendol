@extends('dashboards.templates.templates')

@section('urlPage')
    <p class="hidden lg:block">Dashboard / broadcast / detail</p>
@endsection

@section('content_dashboard')

	<div class="h-full w-10/12 mx-auto">

		<div class=" border shadow-2xl rounded-2xl bg-gray-100 my-10 p-10">
			<div class="flex my-4">
				<p class="w-32">ID </p>
				<p>: {{$news -> id}}</p>
			</div>
			<div class="flex my-4">
				<p class="w-32">Upload at</p>
				<p>: {{$news -> upload_at}}</p>
			</div>
		
			<img src="{{$news -> image}}" alt="" class="w-10/12 mx-auto my-16">
			
			<div class="flex my-4">
				<p class="w-32">Title</p>
				<p>: {{$news -> title}}</p>
			</div>
			<div class="my-4">
				<p class="w-32">Content : </p>
				<p>{{$news -> content}}</p>
			</div>
			<div class="flex justify-end my-10">
				<a href="/dashboard/broadcast">
					<button type="submit" class="border border--500 text-gray-100 bg-blue-500 block rounded-sm font-bold py-2 px-7 flex items-center text-xs mr-2 hover:bg-blue-600">Back</button>		
				</a>
			</div>
		</div>
	</div>


@stop