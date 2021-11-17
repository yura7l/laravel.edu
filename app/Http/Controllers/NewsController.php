<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request,
    App\Http\Requests\NewsRequest,
    App\Models\News,
    Illuminate\Support\Facades\Storage;

class NewsController extends Controller {
    public function submit(NewsRequest $req) {
        $news = new News();
        $news->name = $req->input('name');
        $news->active = $req->input('active');
        //$news->active_from = $req->input('active_from'); // TODO: add date picker
        $news->preview_text = $req->input('preview_text');
        $news->detail_text = $req->input('detail_text');

        //dd($req);

        if($req->file('preview_image')){
            $previevPath = $req->file('preview_image')->store('public/news');
            $news->preview_image = $previevPath;
        }
        if($req->file('detail_image')){
            $detailPath = $req->file('detail_image')->store('public/news');
            $news->detail_image = $detailPath;
        }

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

        foreach ($data as $key => $item){
            if(Storage::disk()->exists($item->preview_image)){
                $data[$key]->preview_image = Storage::url($item->preview_image);
            }
        }

        return view('news', ['data' => $data]);
    }

    /**
     * @param int $id - element ID
     */
    public function getNews(int $id){
        $news = new News();
        $data = $news->find($id);

        if(Storage::disk()->exists($data->detail_image)){
            $data->detail_image = Storage::url($data->detail_image);
        }

        return view('news-detail', ['data' => $data]);
    }

    /**
     * @param int $id - element ID
     */
    public function updateNews(int $id) {
        $news = new News();
        $data = $news->find($id);

        if(Storage::disk()->exists($data->preview_image)){
            $data->preview_image = Storage::url($data->preview_image);
        }
        if(Storage::disk()->exists($data->detail_image)){
            $data->detail_image = Storage::url($data->detail_image);
        }

        return view('news-edit', ['data' => $data]);
    }

    /**
     * @param int $id - element ID
     * @param NewsRequest $req - request data
     */
    public function updateNewsSubmit($id, NewsRequest $req) {
        $news = News::find($id);
        $news->name = $req->input('name');
        $news->active = $req->input('active');
        //$news->active_from = $req->input('active_from'); // TODO: add date picker
        $news->preview_text = $req->input('preview_text');
        $news->detail_text = $req->input('detail_text');

        //dd($req);

        if($req->file('preview_image')){
            $previevPath = $req->file('preview_image')->store('public/news');
            $news->preview_image = $previevPath;
        }
        if($req->file('detail_image')){
            $detailPath = $req->file('detail_image')->store('public/news');
            $news->detail_image = $detailPath;
        }

        $news->save();

        return redirect()->route('news-detail', $id)->with('success', 'News saved');
    }

    /**
     * @param int $id - element ID
     */
    public function deleteNews($id) {
        News::find($id)->delete();

        return redirect()->route('news')->with('success', 'News deleted!');
    }
}
