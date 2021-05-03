<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BroadcastModel;

class BroadcastController extends Controller
{
	public function __construct(){
		$this -> BroadcastModel = new BroadcastModel();
	}

    //
    public function index($row = 5){

    	$data = [
            'all_news' => $this -> BroadcastModel -> all_data(),
    		'news' => $this -> BroadcastModel -> get_data($row),
    	];
 
    	return view('dashboards.layouts.broadcast.index', $data);
    }

    public function add_news(){
        return view('dashboards.layouts.broadcast.add_news');
    }

    public function post_add_news(){

        Request()->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png',
        ]);

        // handle file foto
        $file = Request() -> image;
        $fileName = Request() -> image -> getClientOriginalName();
        $file -> move(public_path('image/news_image'), $fileName);

        $data = [
            'title' => Request() -> title,
            'content' => Request() -> content,
            'image' => '/image/news_image/'.$fileName,
        ];

        $this -> BroadcastModel -> add_data($data);
        return redirect() -> route('broadcast');

    }


    public function detail_news($id){
        $data = [
            'news' => $this -> BroadcastModel -> detail_data($id),
        ];

        return view('dashboards.layouts.broadcast.detail_news',$data);

    }

    public function edit_news($id){
        if (!$this->BroadcastModel->detail_data($id)){
            abort(404);
        }

        $data = [
            'news' => $this -> BroadcastModel -> detail_data($id),
        ];

        return view('dashboards.layouts.broadcast.edit_news', $data);
    }


    public function delete_news($id){
        $news = $this -> BroadcastModel -> detail_data($id);

        if ($news -> image <> ''){
            unlink(public_path($news -> image));
        }


        $this -> BroadcastModel -> delete_data($id);
        return redirect() -> route('broadcast');
    }
}
