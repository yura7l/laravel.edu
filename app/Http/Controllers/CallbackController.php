<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request,
    App\Http\Requests\CallbackRequest,
    App\Models\Callback;

class CallbackController extends Controller {
    public function submit(CallbackRequest $req) {

        $callback = new Callback();
        $callback->phone = $req->input('phone');

        $callback->save();

        return redirect()->route('home')->with('success', 'Your request was sent');
    }
}
