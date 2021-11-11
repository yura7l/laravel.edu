<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller {
    public function submit(Request $req) {
        /**
         * Request data validation
         */
        $validation = $req->validate([
            'name' => 'required|min:2',
            'email' => 'required|email',
            'message' => 'required|min:5|max:50'
        ]);
         //dd($req);
         dd($req->input('message'));
    }
}
