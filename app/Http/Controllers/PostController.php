<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
   
    public function index(){
        //return view('posts.index')
        $posts = DB::table('posts')->get();
        //return $posts;
        return view('posts.index',compact('posts'));
        

    }
   
   
    public function createposts(){
        return view('posts.createposts');

    }
    public function insert(Request $request){
        //return $request;
        //return view('posts.insert');
        DB::table('posts')->insert([
            'title'=>$request->title,
            'body'=>$request->body
        ]);
        return redirect()->route('posts');

    }

    public function edit($id){
        //return $id;
        $post = DB::table('posts')->where('id',$id)->first();
        //return $post;
        return view('posts.editposts',compact('post'));
    }

    public function update(Request $request, $id){
        
        DB::table('posts')->where('id',$id)->update([
            'title'=>$request->title,
            'body'=>$request->body
        ]);
        return redirect()->route('posts');
    }

    public function delete($id){
        DB::table('posts')->where('id',$id)->delete();
        return redirect()->route('posts');

    }

    public function deleteAll(){
        DB::table('posts')->delete();
        return redirect()->route('posts');
    }

    public function deleteAllTruncate(){
        DB::table('posts')->truncate();
        return redirect()->route('posts'); 
    }
}
