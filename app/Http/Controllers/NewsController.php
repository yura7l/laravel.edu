<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request,
    App\Http\Requests\NewsRequest,
    App\Models\News;

class NewsController extends Controller {
    public function submit(NewsRequest $req) {
        $news = new News();
        $news->name = $req->input('name');

        $news->save();

        return redirect()->route('news')->with('success', 'Your news was added');
    }

    public function getList() {
        $news = new News();
        $data = $news->all();

        /**
         * Hint
         *
         * $data = $news->all(); // all records
         * $data[] = $news->find(1); // get record by id
         * $data[] = $news->inRandomOrder()->first(); // first record in random order
         * $data = $news->inRandomOrder()->get(); // all records in random order
         * $data = $news->orderBy('id', 'asc')->get(); // all records sort by id ASC
         * $data = $news->orderBy('id', 'asc')->take(1)->get(); // one record sort by id ASC
         * $data = $news->orderBy('id', 'asc')->skip(1)->take(1)->get(); // one record sort by id ASC (and skip one record)
         * $data = $news->where('id', '=', '1')->get(); // custom condition (SQL operators)
         */

        return view('news', ['data' => $data]);
    }
}
