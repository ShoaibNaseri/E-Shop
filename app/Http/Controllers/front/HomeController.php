<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Slider;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    //
    public function index()
    {

        $contact = Contact::first();
        $categories = Category::all()->take(8);
        $products = Product::all();
        $sliders = Slider::all();
        return view('front.home.index', compact('sliders', 'contact', 'categories', 'products'));
    }
}
