<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
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
        $abouts = About::all();
        $cont = $abouts->count();
        if ($cont == 1) {
            $button = 'hidden';
        }

        return view('cms.frontEnd.about.index', compact('abouts', 'button'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $about = new About();
        return view('cms.frontEnd.about.create', compact('about'));
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
            'aboutTitle' => 'required',
            'aboutDescription' => 'required',
            'aboutImage' => 'required|image',
        ]);


        $icon_path = request()->file('aboutImage')->store('public/cms/images/about');
        $data['aboutImage'] = basename($icon_path);
        $About = About::create($data);
        if ($About) {
            return redirect()->route('about.index');
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
    public function edit(About $about)
    {
        //
        return view('cms.frontEnd.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(About $about)
    {
        //
        if (request()->has('image')) {
            Storage::delete('public/cms/images/about/' . $about->aboutImage);
            $icon_path = request()->file('image')->store('public/cms/images/about');
            $imageName = basename($icon_path);
            $data = [
                'aboutTitle' => request()->title,
                'aboutDescription' => request()->description,
                'aboutImage' => $imageName,
            ];
            $success = $about->update($data);
            if ($success) {
                return redirect()->route('about.index');
            } else {
                return redirect()->back();
            }
        } else {
            $success = $about->update($this->validateRequest());
            if ($success) {
                return redirect()->route('about.index');
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
    public function destroy($id)
    {
        //
    }
    private function validateRequest()
    {
        return request()->validate([
            'aboutTitle' => 'required',
            'aboutDescription' => 'required',
        ]);
    }
}
