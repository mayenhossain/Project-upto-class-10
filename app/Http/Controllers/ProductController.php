<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    public function index(){
        $products = DB::table('products')->get();
        $data['products']=$products;
        //dd($data);
        return view('product.index',$data);
    }
    public function create(){
        //dd('create new product');
        return view('product.create');
    }
    public function store(Request $request){
        //dd($request->all());
        $data['name']=$request->name;
        $data['price']=$request->price;
        $data['details']=$request->details;
        //dd($data);
        DB::table('products')->insert($data);
        return redirect()->to('products');

    }
    public function edit($id){
        //dd($id);
        $product = DB::table('products')->where('id',$id)->first();
        //dd($product);
        $data['product']=$product;
        return view('product/edit',$data);
    }
    public function update(Request $request,$id){
        //dd($request->all());
        $data['name']= $request->name;
        $data['price']= $request->price;
        $data['details']= $request->details;
        //dd($data);
        DB::table('products')->where('id', $id)->update($data);
        return redirect()->to('products');
    }
    public function destroy($id){
        DB::table('products')->delete($id);
        return redirect()->to('products');
    }
}
