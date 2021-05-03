@extends('dashboards.templates.templates')

@section('urlPage')
    <p class="hidden lg:block">Dashboard / broadcast</p>   
@endsection

@section('content_dashboard')
	<div class="relative mt-10 mb-5 items-center">

        <div class="flex">
            <div class="flex">
                <p>show</p>
                <input type="number" class="border ml-3 p-1 w-16" min="5" value="{{isset($row) ? $row : 5 }}" id="show_input">

                <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-4" onclick="pageShow()">update</button>
            </div>

            <div class="flex items-center absolute right-0">
                <p>Search</p>
                <input type="text" class="border ml-3 p-1" id="show_search">
                <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-4" onclick="search()">Submit</button>        
            </div>
        </div>

        <div class="flex mt-5">
            <a href="/dashboard/broadcast/add">
                <button class="border border-green-500 text-green-500 block rounded-sm font-bold py-2 px-10 flex items-center text-xs mr-2 hover:bg-green-500 hover:text-white">Add New Broadcasting</button>
            </a>
        </div>        

    </div>


    <div class="mx-auto rounded-lg h-max text-xs lg:text-xs">
        <table class="table bg-gray-100 text-left rounded-lg" id="table">
            <thead class="bg-green-500 text-gray-100">
                <tr class="text-center">
                    <th class="p-2">No</th>
                    <th class="p-2">Id</th>
                    <th class="p-2 px-10">Image</th>
                    <th class="p-2 px-10 ">Title</th>
                    <th class="p-2 px-32">Content</th>
                    <th class="p-2 px-10">Upload_at</th>
                    <th class="p-2">Action</th>
                </tr>
            </thead>
            <tbody id="news_table">
                <?php $no = $news -> firstItem() ?>
                @foreach ($news as $record)
                    <tr>
                        <td class="p-4">{{ $no++ }}</td>
                        <td class="p-4">{{$record -> id}}</td>
                        <td class="p-4">
                            <img src="{{$record -> image}}" alt="" class="w-full mx-auto">
                        </td>
                        <td class="p-4">{{$record -> title}}</td>
                        <td class="p-4">{{$record -> content}}</td>
                        <td class="p-4">{{$record -> upload_at}}</td>
                        <td class=''>
                            <a href="/dashboard/broadcast/detail/{{$record -> id}}">
                                <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-3 px-4" title="detail">
                                    <img src="/image/icons/detail.svg" alt="" class="w-4">
                                </button>
                            </a>
                            <a href="/dashboard/broadcast/edit/{{$record -> id}}">
                                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-4" title="edit">
                                    <img src="/image/icons/edit.svg" alt="" class="w-4">
                                </button>
                            </a>
                            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-3 px-4" onclick="isDelete({{$record -> id}})" title="delete">
                                <img src="/image/icons/delete.svg" alt="" class="w-4">
                            </button>
                            
                        </td>
                    </tr>    
                @endforeach
            </tbody>


            <tbody id="search" class="hidden">

            </tbody>

        </table>



        <div class="container my-10 text-gray-400">
            {{ $news->links() }}
        </div>

    </div>
@stop

@section('js')
    <script type="text/javascript">
        var news = {!! $all_news->toJson() !!};
    </script>
    <script type="text/javascript" src="/js/dashboard/news/index.js"></script>
@stop