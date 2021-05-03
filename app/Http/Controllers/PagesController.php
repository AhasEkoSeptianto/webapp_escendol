<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;
use App\Models\BroadcastModel;

class PagesController extends Controller
{

	public function __construct()
	{
	   $this -> ProductModel = new ProductModel();
       $this -> BroadcastModel = new BroadcastModel();
	}

    public function index(){

    	$data = [
    		'product_recomend' => $this -> ProductModel -> fillter_product('Recomend'),
            'product_special' => $this -> ProductModel -> fillter_product('Special'),
            'product_normal' => $this -> ProductModel -> fillter_product('Normal'),
            'product_material' => $this -> ProductModel -> fillter_product('Material'),
            'news' => $this -> BroadcastModel -> get_data(),
    	];

        return view('Home', $data);
        
    }

    public function about(){
        return view('About');
    }
}
