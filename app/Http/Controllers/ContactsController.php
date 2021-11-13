<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request,
    App\Http\Requests\ContactsRequest,
    App\Models\Contacts;

class ContactsController extends Controller {
    public function submit(ContactsRequest $req) {
        $contacts = new Contacts();
        $contacts->name = $req->input('name');
        $contacts->email = $req->input('email');
        $contacts->message = $req->input('message');

        $contacts->save();

        return redirect()->route('contacts')->with('success', 'Your message was sent');
    }
}
