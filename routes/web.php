<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});
//Route::get('/about', function () {
//    return view('about', [
//        'articles' =>  App\Article::take(3)->latest()->get()
//    ]);
//});

Route::get('/articles', 'ArticlesController@index');
Route::post('articles', 'ArticlesController@store');
Route::get('/articles/create', 'ArticlesController@create');
Route::get('/articles/{article}', 'ArticlesController@show');
Route::get('/articles/{article}/edit', 'ArticlesController@edit');
Route::put('/articles/{article}', 'ArticlesController@update');

// GET /articles
// GET /articles/:id
// POST /articles
// PUT /articles/:id
// DELETE /articles/:id/


// GET /videos
// GET /videos/create
// POST /videos
// GET /videos/2
// GET /videos/2/edit
// PUT /videos/2
// DELETE /videos/2
