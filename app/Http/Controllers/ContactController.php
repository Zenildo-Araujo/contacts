<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('auth.index', compact('contacts'));
    }
    
    public function show_all()
    {
        $contacts = Contact::all();
        return view('auth.show', compact('contacts'));
    }
    
    public function create()
    {
        return view('auth.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:5',
            'contact' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|numeric|digits:9',
            'email' => 'required',
            ]);
        
        Contact::create($request->all());
        return redirect()->route('contacts.index')->with('success','Contact create successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $contacts = Contact::find($id);
        return view('auth.index', compact('contacts'));
    }

    /**
     * Show the form for editing the specified contact.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = Contact::find($id);

        return view('auth.edit', compact('contact'));
    }
    
    public function detail($id)
    {
        $contact = Contact::find($id);
        return view('auth.detail', compact('contact'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|min:5',
            'contact' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|numeric|digits:9',
            'email' => 'required',
            ]);

        $contact = Contact::find($id);
        Contact::create($request->all());

        return redirect()->url('contacts.index')
            ->with('success', 'Contact updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contact = Contact::find($id);
        $contact->delete();

        return redirect()->url('contacts.index')
            ->with('success', 'Contacts deleted successfully');
    }
}
