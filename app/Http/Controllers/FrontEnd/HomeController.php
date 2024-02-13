<?php
/*
 * Copyright notice for the website built for saqer.com.iq.
 * Copyright (c) 2024. Jodx.dev. All rights reserved.
 * This work is protected by copyright law. Unauthorized reproduction, distribution, or modification is strictly prohibited.
 */

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function home(){
        return view("template.home");
    }

    public function about(){
        return view("template.about");
    }

    public function services(){
        return view("template.services");
    }

    public function portfolio(){
        return view("template.portfolio");
    }

    public function contact(){
        return view("template.contact");
    }

    public function blog(){
        return view("template.blog");
    }

    public function blog_details($id){
        return view("template.blog_details");
    }


}
