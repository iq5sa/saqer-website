<?php
/*
 * Copyright notice for the website built for saqer.com.iq.
 * Copyright (c) 2024. Jodx.dev. All rights reserved.
 * This work is protected by copyright law. Unauthorized reproduction, distribution, or modification is strictly prohibited.
 */

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\HomeSlider;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\VideoPromotion;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    //

    public function home(){
        $sliders = HomeSlider::all()->first();
        $videoPromotion = VideoPromotion::all()->last();
        $abouts = About::all()->last();
        $blogs = Blog::all()->take(3)->sortBy("id");
        $services = Service::all()->take(4);
        $portfolios = Portfolio::all()->sortBy("id",SORT_DESC)->take(4);
        $testimonials = Testimonial::all()->take(16);

        return view("template.home", compact("sliders","abouts",
            "blogs","services","portfolios",'testimonials','videoPromotion'));
    }

    public function about(){
        $abouts = About::all()->last();
        $testimonials = Testimonial::all()->take(16);
        return view("template.about", compact('abouts','testimonials'));
    }

    public function services(){
        $services = Service::all();

        return view("template.services", compact('services'));
    }

    public function portfolio(){
        $portfolios = Portfolio::all()->take(20)->sortBy("id");
        return view("template.portfolio", compact('portfolios'));
    }

    public function contact(){
        return view("template.contact");
    }

    public function blog(){
        $blogs = Blog::all();
        return view("template.blog",compact('blogs'));
    }



    public function blog_details($slug){

        $blog = Blog::where("slug", $slug)->first();

        return view("template.blog_details",compact("blog"));
    }


    public function submitContact(Request $request)
    {

        $validated = $request->validate([
            "full_name"=>["bail","required","max:255"],
            "email"=>["required","email:rfc","max:255"],
            "address"=>["required","max:255"],
            "phone_number"=>["required","max:255"],
            "message"=>["required","max:255"]

        ]);

        $contactNew = new Contact();
        $contactNew->full_name = $request->input("full_name");
        $contactNew->email = $request->input("email");
        $contactNew->address = $request->input("address");
        $contactNew->phone_number = $request->input("phone_number");
        $contactNew->message = $request->input("message");
        $contactNew->save();

        return redirect()->back()->with(["status"=>true,"message"=>"تم الارسال بنجاح شكرا لك!"]);



    }


}
