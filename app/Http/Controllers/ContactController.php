<?php

namespace App\Http\Controllers;

use App\Contact;
use Request;
use App\Fileentry;
use App\Http\Requests;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
    }

    public function index()
    {
        $contacts = Contact::all();
        return view('contact.index')->with('contacts', $contacts);
    }

    public function create()
    {
        $images = Fileentry::all();
        return view('contact.create')->with('images', $images);
    }

    public function store()
    {
        $input = Request::all();
        Contact::create($input);
        return redirect('contact');
    }

    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        return view('contact.edit')->with('contact', $contact);
    }

    public function update($id)
    {
        $contact = Contact::findOrFail($id);
        $newContact = Request::all();
        $contact->update($newContact);
        return redirect('admin/contact');
    }
}
