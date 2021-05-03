@extends('dashboards.templates.templates')

@section('css')
    <link rel="stylesheet" href="/css/dashboard/product/index.css">
@endsection

@section('urlPage')
    <p class="hidden lg:block">Dashboard / product</p>   
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
            <a href="/dashboard/product/add">
                <button class="border border-green-500 text-green-500 block rounded-sm font-bold py-2 px-10 flex items-center text-xs mr-2 hover:bg-green-500 hover:text-white">Add New Product</button>
            </a>
        </div>        

    </div>


    <div class="mx-auto rounded-lg h-max text-xs lg:text-sm">
        <table class="table-auto w-full bg-gray-100 text-center rounded-lg" id="table">
            <thead class="bg-green-500 text-gray-100">
                <tr>
                    <th class="p-2">No</th>
                    <th>Id</th>
                    <th>Product</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Type</th>
                    <th>Post by</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="product_table">

                <?php $no = $product -> firstItem() ?>
                @foreach ($product as $record)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{$record -> id}}</td>
                        <td>{{$record -> name_product}}</td>
                        <td>
                            <img src="{{$record -> image_product}}" alt="" class="w-28 mx-auto">
                        </td>
                        <td>{{$record -> price_product}}</td>
                        <td>{{$record -> type_product}}</td>
                        <td>{{$record -> upload_at}}</td>
                        <td>
                            <a href="/dashboard/product/detail/{{$record -> id}}">
                                <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-3 px-4" title="detail">
                                    <img src="/image/icons/detail.svg" alt="" class="w-5">
                                </button>
                            </a>
                            <a href="/dashboard/product/edit/{{$record -> id}}">
                                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-4" title="edit">
                                    <img src="/image/icons/edit.svg" alt="" class="w-5">
                                </button>
                            </a>
                            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-3 px-4" onclick="isDelete({{$record -> id}})" title="delete">
                                <img src="/image/icons/delete.svg" alt="" class="w-5">
                            </button>
                            
                        </td>
                    </tr>    
                @endforeach
            </tbody>

            <tbody id="search" class="hidden">

            </tbody>

        </table>



        <div class="container my-10 text-gray-400">
            {{ $product->links() }}
        </div>

    </div>
@endsection

@section('js')
    <script type="text/javascript">
        var product = {!! $allproduct->toJson() !!};
    </script>
    <script type="text/javascript" src="/js/dashboard/product/index.js"></script>
@stop
