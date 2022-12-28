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
//
//Route::get('/', function() {
//    return view('test',[
//        'name' => request('name'),
//    ]);
//});

//
//
Route::get('posts/{post}', 'PostsController@show');


//use App\Http\Controllers\NotificationController;

//Route::get('/', function() {
//    $view = view('welcome');
//
//    // Dispatcher 클래스를 경우해 Event 실행
//
//    \Event::dispatch(new \App\Events\PublishProcessor(15));
//
//    return $view;
//
////    return view('test',[
////        'name' => request('name'),
////    ]);
//});


Route::get('/send-notification', 'NotificationController@sendOfferNotification');
Route::get('/receive-notification', 'NotificationController@receiveOfferNotification');

//Route::get('/send-notification', function() {
//    echo 'hie';
//});
