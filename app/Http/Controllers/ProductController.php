<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;

class ProductController extends Controller
{

	public function __construct()
	{
		$this -> middleware('auth');
        $this -> ProductModel = new ProductModel();

	}

    public function getProduct($row = 5){

        $data = [
            'product' => $this -> ProductModel ->   pagination($row),
            'allproduct' => $this -> ProductModel -> allData(),
            'row' => $row,
        ];
        
        return view('dashboards.layouts.product.index', $data);

    }

    public function add_product(){
    	return view('dashboards.layouts.product.add_product');
    }

    public function post_add_product(){
        Request()->validate([
            'product_name' => 'required',
            'product_price' => 'required', 
            'product_type' => 'required',
            'product_image' => 'required|mimes:jpg,jpeg,png',
        ]);

        // handle file foto
        $file = Request() -> product_image;
        $fileName = Request() -> product_image -> getClientOriginalName();
        $file -> move(public_path('image/es_cendol'), $fileName);

        $data = [
            'name_product' => Request() -> product_name,
            'price_product' => Request() -> product_price,
            'type_product' => Request() -> product_type,
            'image_product' => '/image/es_cendol/'.$fileName,
        ];

        $this -> ProductModel -> add_product($data);
        return redirect() -> route('product');

    }


    public function detail_product($id){

        $data = [
            'product' => $this -> ProductModel -> detail_product($id),
        ];

        return view('dashboards.layouts.product.detail_product', $data);
    }

    public function edit_product($id){

        if (!$this->ProductModel->detail_product($id)){
            abort(404);
        }

        $data = [
            'product' => $this -> ProductModel -> detail_product($id),
        ];

        return view('dashboards.layouts.product.edit_product', $data);
    }

    public function post_edit_product($id){

        if (Request() -> product_image <> ''){
            Request()->validate([
                'product_name' => 'required',
                'product_price' => 'required', 
                'product_type' => 'required',
                'product_image' => 'required|mimes:jpeg,bmp,png,jpg',
            ]);


            // delete image before
            $product = $this -> ProductModel -> detail_product($id);
            unlink(public_path($product -> image_product));

            // handle file foto
            $file = Request() -> product_image;
            $fileName = Request() -> product_image -> getClientOriginalName();
            $file -> move(public_path('image/es_cendol'), $fileName);

            $data = [
                'name_product' => Request() -> product_name,
                'price_product' => Request() -> product_price,
                'type_product' => Request() -> product_type,
                'image_product' => '/image/es_cendol/'.$fileName,
            ];

            $this -> ProductModel -> update_product($id,$data);


        } else {
            Request() -> validate([
                'product_name' => 'required',
                'product_price' => 'required', 
                'product_type' => 'required',
            ]);

            $data = [
                'name_product' => Request() -> product_name,
                'price_product' => Request() -> product_price,
                'type_product' => Request() -> product_type,
            ];

            $this -> ProductModel -> update_product($id,$data);
        }

        return redirect() -> route('product');


    }

    public function delete_product($id){

        // check jika foto ada maka akn dihapus
        $product = $this -> ProductModel -> detail_product($id);

        if ($product -> image_product <> ''){
            unlink(public_path($product -> image_product));
        }


        $this -> ProductModel -> delete_product($id);
        return redirect() -> route('product');
    }

}
