<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function viewAboutFile(){
        $data['heading']='About My Blog';
        $data['paragraph']='At mayenhossain.com, we believe everyone deserves to have a website or online store. Innovation and simplicity makes us happy: our goal is to remove any technical or financial barriers that can prevent business owners from making their own website. We are excited to help you on your journey!';
        return view('about_file',$data);
    }
}
