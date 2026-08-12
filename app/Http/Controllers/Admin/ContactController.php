<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;


class ContactController extends Controller
{


    public function index()
    {

        $contacts = Contact::latest()->get();


        return view('admin.contacts.index', compact('contacts'));

    }




    public function destroy(Contact $contact)
    {

        $contact->delete();


        return back()->with(
            'success',
            'Pesan berhasil dihapus'
        );

    }


}