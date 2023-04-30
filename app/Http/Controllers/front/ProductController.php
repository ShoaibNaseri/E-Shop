<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Contact;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //

    public function index()
    {
        $productTitle = 'All';
        $products = Product::paginate(6);
        $categories = Category::all();
        $contact = Contact::first();
        return view('front.product.index', compact('products', 'contact', 'categories', 'productTitle'));
    }
    public function searchByCategory($id)
    {
        $categories = Category::all();
        $productTitle = Category::find($id)->name;
        $contact = Contact::first();
        $products = DB::table('products')->where('category_id', $id)->paginate(1);
        return view('front.product.index', compact('products', 'contact', 'categories', 'productTitle'));
    }
}
