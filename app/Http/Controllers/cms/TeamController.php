<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $teams = Team::all();
        return view('cms.frontEnd.team.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $team = new Team();
        return view('cms.frontEnd.team.create', compact('team'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Team $team, Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'image' => 'required',
            'email' => 'required',
            'linkedin' => 'nullable',
        ]);
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('storage/cms/images/team'), $imageName);
        $image = Image::make(public_path('storage/cms/images/team/' . $imageName))->fit(400, 400);
        $image->save();
        $data = [
            'name' => $request->name,
            'position' => $request->position,
            'image' => $imageName,
            'email' => $request->email,
            'linkedin' => $request->linkedin,
        ];
        $success = $team->create($data);
        if ($success) {
            return redirect()->route('team.index')->with('success', 'Team member added successfully');
        } else {
            return redirect()->route('team.index')->with('error', 'Team member could not be added');
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
    public function edit(Team $team)
    {
        //
        return view('cms.frontEnd.team.edit', compact('team'));
    }

    //


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Team $team)
    {
        //
        if (request()->has('image')) {
            Storage::delete('public/cms/images/team/' . $team->image);
            $imageName = time() . '.' . request()->image->extension();
            request()->image->move(public_path('storage/cms/images/team'), $imageName);
            $image = Image::make(public_path('storage/cms/images/team/' . $imageName))->fit(2000, 1300);
            $image->save();
            $data = [
                'name' => request()->name,
                'position' => request()->position,
                'image' => $imageName,
                'email' => request()->email,
                'linkedin' => request()->linkedin,

            ];
            $success = $team->update($data);
            if ($success) {
                return redirect()->route('slider.index');
            } else {
                return redirect()->back();
            }
        } else {
            $success = $team->update($this->validateRequest());
            if ($success) {
                return redirect()->route('team.index');
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
    public function destroy(Team $team)
    {
        //
        Storage::delete('public/cms/images/team/' . $team->image);
        $success = $team->delete();
        if ($success) {
            return redirect()->route('team.index');
        } else {
            return redirect()->back();
        }
    }

    private function validateRequest()
    {
        return request()->validate([
            'name' => 'required',
            'position' => 'required',
            'email' => 'required',
            'linkedin' => 'nullable',
        ]);
    }
}
