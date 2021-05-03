<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProductModel extends Model
{
    use HasFactory;
    
    public function allData(){
    	return DB::table('product')->get();
    }

    public function fillter_product($type){
        return DB::table('product') -> where('type_product', $type) -> get();
    }

    public function pagination($row){
        return DB::table('product') -> paginate($row);
    }

    public function add_product($data){
    	return DB::table('product') -> insert($data);
    }

    public function detail_product($id){
    	return DB::table('product') -> where('id',$id) -> first();
    }

    public function update_product($id, $data){
        return DB::table('product') -> where('id',$id) -> update($data);
    }

    public function delete_product($id){
    	return DB::table('product') -> where('id',$id) -> delete();
    }
}
