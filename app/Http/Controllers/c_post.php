<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;//from control Post
use App\Category;//from control Category

class c_post extends Controller
{
    public function showpost(){
        $posts=Post::orderBy('post_id','desc')->paginate(2);//to get only two posts from Post contrlol that connect to data base posts
        return view("posts.posts",compact("posts"));
    }
    public function addpost(){
        $categories=Category::all();
        return view("admin.posts",compact("categories"));

    }
    public function insertpost(Request $request){
        $request->validate([
            "title"=>"required | min:4 ",
            "content"=>"required | min:10",
            "catid"=>"required"
        ],[
            "title.required"=>" title Cann't be Empty",
            "title.main" =>"title cannot be less tha 4 char",
            "catid.required"=>"Category Post is required"
        ]);
        $addpost= new Post;
        $addpost->p_title =request("title");
        $addpost->p_content =request("content");
        $addpost->post_user =request("userid");
        $addpost->post_cat =request("catid");
        $addpost->save();
        return redirect("/posts");

    }

    public function editpost($id){
        $categories=Category::all();
        $post=Post::find($id);//get post of id
        return view("admin.editpost",compact("categories","post"));
    }
    public function updatepost($id){
        $updatepost=Post::find($id);//get post of id
        $updatepost->p_title =request("title");
        $updatepost->p_content =request("content");
        $updatepost->post_user =request("userid");
        $updatepost->post_cat =request("catid");
        $updatepost->save();
        return redirect("\posts");
    }

}
