<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Contact;
use App\Models\Product;

class AboutController extends Controller
{
    //
    public function index()
    {
        $about = About::first();
        $contact = Contact::first();
        $products = Product::all();

        return view('front.about.index', compact('about', 'contact', 'products'));
    }
}
