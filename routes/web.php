<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserProfileController;

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

///
Route::get('/hello', function () { 
    return 'Hello World';
});

///
Route::get('/world', function () 
    { return 'World';
});

///
Route::get('/welcome', function () 
    { return '2341760174 Muhammad Nazril Nur Rahman';
});

// Route::get('/user/{name}', function ($name) 
//     { return 'My name is '.$name;
// });


Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
    });

    Route::get('/posts/{post}/comments/{comment}/id/{id}', function ($postId, $commentId,$id) {
        return 'Pos ke-'.$postId." Komentar ke-: ".$commentId. "id ku yang ke-".$id;
        });

///
Route::get('/user/{name?}', function ($name='sumanto') 
    { return 'My name is '.$name;
});

///
