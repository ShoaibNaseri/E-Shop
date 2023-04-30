<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AuthenticationImage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class AuthenticationImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $button = '';
        $images = AuthenticationImage::all();
        $count = AuthenticationImage::count();
        if ($count == 1) {
            $button = 'hidden';
        }
        return view('cms.applicantFrontEnd.authenticationImages.index', compact('images', 'button'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cms.applicantFrontEnd.authenticationImages.create');
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
        $request->validate([

            'image' => 'required|image',
        ]);


        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('storage/cms/images/applicantLoginPage'), $imageName);
        $image = Image::make(public_path('storage/cms/images/applicantLoginPage/' . $imageName))->fit(2000, 1333);
        $image->save();

        $images = new AuthenticationImage();
        $images->image = $imageName;
        $save = $images->save();
        if ($save) {
            return redirect()->route('authenticationimage.index');
        } else {
            return back()->with('fail', 'Something went wrong, try again later');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(AuthenticationImage $authenticationimage)

    {
        //

        $authenticationimage->image = Storage::delete('public/cms/images/applicantLoginPage/' . $authenticationimage->image);
        $delete = $authenticationimage->delete();
        if ($delete) {
            return redirect()->route('authenticationimage.index');
        } else {
            return back()->with('fail', 'Something went wrong, try again later');
        }
    }
}
