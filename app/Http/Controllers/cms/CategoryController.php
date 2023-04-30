<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
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
        $categories = Category::all();
        return view('cms.category.index', compact('categories', 'num'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $category = new Category;
        return view('cms.category.create', compact('category'));
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
        $date =  $request->validate([
            'name' => 'required',
            'description' => 'nullable'
        ]);

        $success = Category::create($date);
        if ($success) {
            return redirect()->route('category.index')->with('success', 'Service Created Successfully');
        } else {
            return redirect()->route('category.index')->with('error', 'Service Created Failed');
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
    public function edit(Category $category)
    {
        //
        return view('cms.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Category $category)
    {
        //
        $data = request()->validate([
            'name' => 'required',
            'description' => 'nullable'
        ]);

        $success = $category->update($data);
        if ($success) {
            return redirect()->route('category.index')->with('success', 'Service Created Successfully');
        } else {
            return redirect()->route('category.index')->with('error', 'Service Created Failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
