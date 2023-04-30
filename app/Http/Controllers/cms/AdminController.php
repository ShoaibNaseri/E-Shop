<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class AdminController extends Controller
{
    //
    public function index()
    {
        $product = Product::all();
        $productCount = $product->count();
        return view('cms.home.index', compact('productCount'));
    }
}
