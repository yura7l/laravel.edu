<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request,
    App\Http\Requests\CallbackRequest,
    App\Models\Callback;

class CallbackController extends Controller {
    public function submit(CallbackRequest $req) {
        $allback = new Callback();
        $allback->phone = $req->input('phone');

        $allback->save();

        return redirect()->route('home')->with('success', 'Your request was sent');
    }
}
