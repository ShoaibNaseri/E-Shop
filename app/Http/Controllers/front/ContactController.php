<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\Product;

class ContactController extends Controller
{
    //
    public function index()
    {
        $contact = Contact::first();
        $products = Product::all();
        return view('front.contact.index', compact('contact', 'products'));
    }
}
