<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BroadcastModel extends Model
{
    use HasFactory;

    public function all_data() {
    	return DB::table('news') -> get();
    }

    public function get_data($row = 2){
    	return DB::table('news') -> paginate($row);
    }

    public function add_data($data){
        return DB::table('news') -> insert($data);
    }

    public function detail_data($id){
    	return DB::table('news') -> where('id',$id) -> first();
    }

    public function delete_data($id){
    	return DB::table('news') -> where('id', $id) -> delete();
    }

}
