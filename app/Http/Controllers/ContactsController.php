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

    public function getList() {
        $contacts = new Contacts();
        $data = $contacts->all();

        /**
         * Hint
         *
         * $data = $contacts->all(); // all records
         * $data[] = $contact->find(1); // get record by id
         * $data[] = $contact->inRandomOrder()->first(); // first record in random order
         * $data = $contact->inRandomOrder()->get(); // all records in random order
         * $data = $contact->orderBy('id', 'asc')->get(); // all records sort by id ASC
         * $data = $contact->orderBy('id', 'asc')->take(1)->get(); // one record sort by id ASC
         * $data = $contact->orderBy('id', 'asc')->skip(1)->take(1)->get(); // one record sort by id ASC (and skip one record)
         * $data = $contact->where('id', '=', '1')->get(); // custom condition (SQL operators)
         */

        return view('messages', ['data' => $data]);
    }
}
