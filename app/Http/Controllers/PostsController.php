<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index($id){
    
        // $post = \DB::table('posts')->where("id",$id)->first();
        // var_dump($post);
        $post = Post::where("id",$id)->first();
        if(!$post){
            abort(404);
        }
        $data = [
            "post"=>$post
        ];
        return view('posts.index',$data);
    }
}
