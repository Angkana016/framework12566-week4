<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
    
});
Route::get('/contact', function () {
    return view('contact');
    
});
Route::get('/post/{id}', function (string $id) {
    //return view('post');
     return '<h1>Post ID:'.$id.'</h1>';
});
//Optional parameter
Route::get('/post/{id?}/comment/{commentid?}',
function (string $id = null,string $comment=null) {
    if($id){
        return '<h1>Post ID:'.$id.'</h1><h2>Comment: '.$comment.'</h2>';
    }
    else{
        return '<h1>No ID Found</h1>';
    }
});
Route::get('/blog/{id}',function (string $id) {
    if($id){
        return '<h1>Post ID:'.$id.'</h1>';
    }
    else{
        return '<h1>No ID Found</h1>';
    }
})->where('id','[a-z]+');
//})->where('id','[0-9]+');
//})->wherein('id',['movie','song','mark']);