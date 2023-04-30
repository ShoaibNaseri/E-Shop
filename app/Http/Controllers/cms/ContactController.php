<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $contacts = Contact::all();

        return view('cms.frontEnd.contact.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $contact = new Contact();
        return view('cms.frontEnd.contact.create', compact('contact'));
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

        $success = Contact::create($this->validateRequest());
        if ($success) {
            return redirect()->route('contact.index')->with('success', 'Contact created successfully');
        } else {
            return redirect()->route('contact.index')->with('error', 'Contact not created');
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
    public function edit(Contact $contact)
    {
        //
        return view('cms.frontEnd.contact.edit', compact('contact'));
    }

    //


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Contact $contact)
    {
        //
        $success = $contact->update($this->validateRequest());
        if ($success) {
            return redirect()->route('contact.index')->with('success', 'Contact updated successfully');
        } else {
            return redirect()->route('contact.index')->with('error', 'Contact not updated');
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
    private function validateRequest()
    {
        return request()->validate([
            'adress' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);
    }
}
