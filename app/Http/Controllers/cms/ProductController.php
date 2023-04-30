<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $num = 1;
        $products = Product::paginate(10);
        return view('cms.product.index', compact('products', 'num'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
        $product = new Product;
        return view('cms.product.create', compact('product', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'name' => 'required',
            'link' => 'required',
            'image' => 'required|image',
            'category_id' => 'required',
            'price' => 'nullable',
            'description' => 'nullable'

        ]);


        $icon_path = request()->file('image')->store('public/cms/images/products');
        $data['image'] = basename($icon_path);

        $success = Product::create($data);
        if ($success) {
            echo "done";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        $categories = Category::all();
        return view('cms.product.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Product $product)
    {
        //

        if (request()->has('image')) {
            Storage::delete('public/cms/images/products/' . $product->image);
            $icon_path = request()->file('image')->store('public/cms/images/products');
            $imageName = basename($icon_path);
            $data = [
                'name' => request()->name,
                'category_id' => request()->category_id,
                'link' => request()->link,
                'image' => $imageName,
                'price' => request()->price,
                'description' => request()->description,
            ];
            $success = $product->update($data);
            if ($success) {
                return redirect()->route('product.index');
            } else {
                return redirect()->back();
            }
        } else {
            $success = $product->update($this->validateRequest());
            if ($success) {
                return redirect()->route('product.index');
            } else {
                return redirect()->back();
            }
        };
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product  $product)
    {
        //
        $product->image = Storage::delete('public/cms/images/product/' . $product->image);
        $success = $product->delete();
        if ($success) {
            return redirect()->route('product.index');
        } else {
            return back()->with('fail', 'Something went wrong, try again later');
        }
    }
    private function validateRequest()
    {
        return request()->validate([
            'name' => 'required',
            'link' => 'required',
            'image' => 'image',
            'category_id' => 'required',
            'price' => 'nullable',
            'description' => 'nullable'
        ]);
    }
}
