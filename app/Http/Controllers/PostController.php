<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //
    public function index(){
        $blogs = DB::table('posts')->get();
        $data['blogs']=$blogs;
        //dd($data);
        return view('post.index',$data);
    }
    public function create(){
        //dd('create new post');
        return view('post.create');
    }
    public function store(Request $request){
        //dd($request->all());
        $data['title']=$request->title;
        $data['details']=$request->details;
        //dd($data);
        DB::table('posts')->insert($data);
        return redirect()->to('posts');

    }
    public function edit($id){
        //dd($id);
        $post = DB::table('posts')->where('id',$id)->first();
        //dd($post);
        $data['post']=$post;
        return view('post.edit',$data);
    }
    public function update(Request $request,$id){
        //dd($request->all());
        $data['title']= $request->title;
        $data['details']= $request->details;
        //dd($data);
        DB::table('posts')->where('id', $id)->update($data);
        return redirect()->to('posts');
    }
    public function destroy($id){
        DB::table('posts')->delete($id);
        return redirect()->to('posts');
    }
}
