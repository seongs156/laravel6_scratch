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


Route::get('articles', 'ArticlesController@index');
Route::get('articles/{article}', 'ArticlesController@show');

// GET /articles
// GET /articles/:id
// POST /articles
// PUT /articles/:id/update
// DELETE /articles/:id/



// GET /videos
// GET /videos/create
// POST /videos
// GET /videos/2
// GET /videos/2/edit
// PUT /videos/2
// DELETE /videos/2

