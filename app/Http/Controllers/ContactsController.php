<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request,
    App\Http\Requests\ContactsRequest;

class ContactsController extends Controller {
    public function submit(ContactsRequest $req) {
        /*$validation = $req->validate([
            'name' => 'required|min:2',
            'email' => 'required|email',
            'message' => 'required|min:5|max:50'
        ]);*/
         //dd($req->input('message'));
    }
}
