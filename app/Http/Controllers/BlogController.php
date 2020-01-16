<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function viewBlogFile(Request $request){
        //dd($request->heading);
        $data['heading']=$request->heading;
        $data['artical']='This is about the blog.This is about the blog.This is about the blog.This is about the blog.This is about the blog.This is about the blog.This is about the blog.This is about the blog.This is about the blog.This is about the blog.This is about the blog.This is about the blog.This is about the blog.This is about the blog.This is about the blog.This is about the blog.This is about the blog.This is about the blog.This is about the blog.This is about the blog.This is about the blog.This is about the blog.This is about the blog.This is about the blog.This is about the blog.This is about the blog.This is about the blog.This is about the blog.';

        return view('blog_file',$data);
    }
}
