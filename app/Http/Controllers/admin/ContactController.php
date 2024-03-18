<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()

    {

        // $contacts = Contact::latest()->paginate(5);
        $contacts = Contact::orderBy('id', 'DESC')->paginate(10);
        return view('admin.contacts.index', compact('contacts'));

            // ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function show($id)

    {

        $contacts = Contact::findOrFail($id);

        return view('admin.contacts.show', compact('contacts'));
    }

    public function destroy($id)

    {

        $contacts = Contact::whereId($id)->first();

        $contacts->delete();

        return redirect()->route('contacts.index')

            ->with('success', 'Contact deleted successfully');
    }
}
