<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\About;
use App\Models\Point;
use App\Models\Contact;
use App\Models\Partner;
use App\Models\Service;
use App\Models\Achievement;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Models\CategoryPrice;

class IndexController extends Controller
{
    private function home(){
        return Home::first();
    }
    private function about(){
        return About::with('point')->first();
    }
    private function partners(){
        return Partner::get();
    }
    private function achievements(){
        return Achievement::get();
    }
    private function services(){
        return Service::get();
    }
    private function testimonials(){
        return Testimonial::get();
    }
    private function category_prices(){
        return CategoryPrice::get();
    }
    private function contact(){
        return Contact::first();
    }

    public function index()
    {
        $home = $this->home();
        $about = $this->about();
        $partners = $this->partners();
        $achievements = $this->achievements();
        $services = $this->services();
        $testimonials = $this->testimonials();
        $category_prices = $this->category_prices();
        $contact = $this->contact();

        return view('home.index', compact('home', 'about', 'partners', 'achievements', 'services', 'testimonials', 'category_prices', 'contact'));
    }
}
