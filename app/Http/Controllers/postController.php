<?php

namespace App\Http\Controllers;
use App\Models\post;

use Illuminate\Http\Request;

class postController extends Controller
{
    //
     public function addPost(){
         return view('add-post');
     }

     function createPost(Request $request){
         $post=new post();
         $post->title=$request->title;
         $post->body=$request->body;
         $post->save();
         return back()->with('success','Note has been Created Successfully!');
     }
    // function getPost(){
    //     $posts=post::orderBy('id','desc')->get();
    //     return view('posts',compact('posts'));
    // }
      public function getPost() {
        $data = post::all();
        return view( 'posts', ['posts' => $data] );
    }

    public function getPostById($id){
        $post=post::where('id',$id)->first();
        return view('single-post',['post' => $post]);
    }
    public function deletePost($id){
        post::where('id',$id)->delete();
           return back()->with('postDelete','Note Has Been Deleted Successfully');
    }

    public function editPost($id){
        $post=post::find($id);
        return view('edit-post',compact('post'));
    }
    public function updatePost(Request $request){
        $post=post::find($request->id);
        $post->title=$request->title;
        $post->body=$request->body;
        $post->save();
        return back()->with('updateMsg','Note has been Updated');
    }
}
