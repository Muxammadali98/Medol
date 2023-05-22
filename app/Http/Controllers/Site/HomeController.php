<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Contact;
use App\Models\News;
use App\Models\Partner;
use App\Models\Product;
use App\Models\Service;
use App\Models\Slide;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $slides = Slide::all();
        $products = Product::all();
        $services = Service::all();
        $about = About::first();
        $news = News::all();
        $partners = Partner::all();
        $contact = Contact::first();
        return view('index', compact('contact','partners','news','slides','products','services','about'));
    }
}
