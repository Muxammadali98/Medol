<?php

namespace App\Http\Controllers\Api;

use App\Helpers\Traits\ApiResponcer;
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
    use ApiResponcer;
    public function home()
    {
        $slides = Slide::all();
        $products = Product::all();
        $services = Service::all();
        $about = About::first();
        $news = News::all();
        $partners = Partner::all();
        $contact = Contact::first();
        $data = [
            'contact'=>$contact,
            'partners'=>$partners,
            'news'=>$news,
            'slides'=>$slides,
            'products'=>$products,
            'services'=>$services,
            'about'=>$about
        ];
        return $this->success($data,'all information for home page'); 
    }
}
