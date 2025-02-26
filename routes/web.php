<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;




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
Route::get('/hello',[WelcomeController::class,'hello']);

///
Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/articles/{id}', [PageController::class, 'articles']);

///
Route::get('/', HomeController::class);
Route::get('/about', AboutController::class);
Route::get('/articles/{id}', ArticleController::class);

///
Route::resource('photos', PhotoController::class);

