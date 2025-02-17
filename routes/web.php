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

Route::get('/hello', function () {
   return 'Hello World';
});

Route::get('/world', function () {
    return 'World';
 });

Route::get('/', function () {
    return 'Selamat Datang';
});

Route::get('/about', function () {
    return 'NIM: 2341760127 dan Nama: Veren Regina Tirsya';
});

Route::get('/user/{name}', function ($name) {
    return 'Nama saya ' . $name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID ' . $id;
});

Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya '.$name;
    });

Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
    });

use App\Http\Controllers\WelcomeController;

Route::get('/hello', [WelcomeController::class, 'hello']);

// // // // // // // // // // // // // // // // // // // //
use App\Http\Controllers\PageController;

// Route ke halaman utama
Route::get('/', [PageController::class, 'index']);

// Route ke halaman about
Route::get('/about', [PageController::class, 'about']);

// Route ke halaman artikel dinamis berdasarkan ID
Route::get('/articles/{id}', [PageController::class, 'articles']);

// // // // // // // // // // // // // // // // // // // //
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;

// Route untuk halaman utama (HomeController)
Route::get('/', HomeController::class);

// Route untuk halaman about (AboutController)
Route::get('/about', AboutController::class);

// Route untuk halaman artikel dinamis berdasarkan ID (ArticleController)
Route::get('/articles/{id}', ArticleController::class);

// // // // // // // // // // // // // // // // // // // //
use App\Http\Controllers\PhotoController;

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);

Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);

// // // // // // // // // // // // // // // // // // // //
Route::get('/greeting', function () {
	return view('blog.hello', ['name' => 'Veren']);
});

Route::get('/greeting', [WelcomeController::class, 'greeting']);


Route::get('/greeting', [WelcomeController::class, 'greeting']);
