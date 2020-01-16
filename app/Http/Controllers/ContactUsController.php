<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    //
    public function viewContactUsFile(){

        $data['heading']='Contact with us at our following address:';
        $data['paragraph']='House#13, Ground floor, Road#02, Sector#6, Utara, Dhaka-1230';
        //dd($data);
        return view('contact_us_file', $data);
    }
}
