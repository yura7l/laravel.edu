<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;
use App\Models\Blog;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/login', function () {
    return view('auth');
})->name('login');
Route::get('/sign-up', function () {
    return view('signup');
})->name('sign-up');

Route::get(
    '/contacts/all/{id}',
    'App\Http\Controllers\ContactsController@getMessage'
)->name('contact-single');
Route::get(
    '/contacts/all',
    'App\Http\Controllers\ContactsController@getList'
)->name('contact-list');
Route::post(
    '/contacts/submit',
    'App\Http\Controllers\ContactsController@submit'
)->name('contact-form');
Route::get(
    '/contacts/update/{id}',
    'App\Http\Controllers\ContactsController@updateMessage'
)->name('contact-update');
Route::post(
    '/contacts/update/{id}',
    'App\Http\Controllers\ContactsController@updateMessageSubmit'
)->name('contact-update-submit');
Route::get(
    '/contacts/delete/{id}',
    'App\Http\Controllers\ContactsController@deleteMessage'
)->name('contact-delete');

Route::post(
    '/form/callback',
    'App\Http\Controllers\CallbackController@submit'
)->name('callback-form');

Route::get(
    '/news',
    'App\Http\Controllers\NewsController@getList'
)->name('news');
Route::get('/news/add', function () {
    return view('news-add');
})->name('news-add');
Route::get(
    '/news/{id}',
    'App\Http\Controllers\NewsController@getNews'
)->name('news-detail');
Route::post(
    '/news/add/submit',
    'App\Http\Controllers\NewsController@submit'
)->name('news-add-submit');
Route::get(
    '/news/edit/{id}',
    'App\Http\Controllers\NewsController@updateNews'
)->name('news-edit');
Route::post(
    '/news/edit/{id}',
    'App\Http\Controllers\NewsController@updateNewsSubmit'
)->name('news-edit-submit');
Route::get(
    '/news/delete/{id}',
    'App\Http\Controllers\NewsController@deleteNews'
)->name('news-delete');

Route::resource('gallery', GalleryController::class);


/**
 * DB Raw SQL queries
 */
/*Route::get('/insert', function (){
    DB::insert('insert into blog(title, content, author) values(?, ?, ?)', ['another one for test', 'Lorem ipsum dolor', 1]);
});*/
/*Route::get('/read', function (){
    $results = DB::select('select * from blog where id = ?', [1]);
    foreach ($results as $result){
        return $result->title;
    }
});*/
/*Route::get('/update', function (){
    $updated = DB::update('update blog set title = "updated title" where id = ?', [1]);
    return $updated;
});*/
/*Route::get('/delete', function (){
    $result = DB::delete('delete from blog where id = ?', [1]);
    return $result;
});*/

/**
 * Eloquent ORM
 * (object-relational mapper)
 */
/*Route::get('/read', function (){
    $posts = Blog::all();
    foreach ($posts as $post) {
        return $post->title;
    }
});*/
/*Route::get('/find', function (){
    $post = Blog::find(2);
    return $post->title;
})*/;
/*Route::get('/findwhere', function (){
    $posts = Blog::where('id', 3)->orderBy('id', 'desc')->take(1)->get();
    return $posts;
});*/
/*Route::get('/findmore', function (){
    // Methods that returning NotFoundException if not found
    //$posts = Blog::findOrFail(1);
    $posts = Blog::where('id', '<', 4)->firstOrFail();
    return $posts;
});*/
/*Route::get('/basicinsert', function (){
    $post = new Blog;
    $post->title = 'New Eloquent ORM title';
    $post->content = 'Test body';
    $post->author = 1;
    $post->save();
});
Route::get('/basicupdate', function (){
    $post = Blog::find(5);
    $post->title = 'New Eloquent ORM title UPDATE';
    $post->content = 'Test body';
    $post->author = 1;
    $post->save();
});*/
/*Route::get('/create', function (){
    Blog::create(['title'=>'Creating new post 5', 'content'=>'random body text', 'author'=>1]);
});*/
/*Route::get('/update', function (){
    Blog::where('id', 6)->where('author', 1)->update(['title'=>'new title using update method']);
});*/
/*Route::get('/delete', function (){
    $post = Blog::find(2);
    $post->delete();

    //Blog::where('author', 1)->delete();
});*/
/*Route::get('/destroy', function (){
    Blog::destroy([1,2]);
});*/
/*Route::get('/softdelete', function (){
    $post = Blog::find(3)->delete();
});*/
/*Route::get('/readsoftdelete', function (){
    $post = Blog::withTrashed()->where('id', 3)->get();
    return $post;
});*/
/*Route::get('/restore', function (){
    Blog::withTrashed()->where('id', 3)->restore();
});*/
Route::get('/forcedelete', function (){
    Blog::withTrashed()->where('id', 3)->forceDelete();
});
