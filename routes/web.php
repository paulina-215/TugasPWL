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

//  route::get('/', function()){
//     return view('website.index');
// });

use App\Http\Controllers\PostingController;
// use App\Http\Controllers\AkunController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

use App\Models\User;



route::resource('/', PostingController::class);

route::resource('/akun', UserController::class);
route::get('/akun/$id', UserController::class);
route::get('/akun/$id', UserController::class, 'index');

Route::resource('/backend',PostingController::class)->middleware('auth');
// route::resource('data', PostController::class);
// route::resource('data', [PostController::class], 'destroy');

// mendeklerasi 1 fungsi
// route::get('/post/{umur}', [PostingController::class, 'index']);

// akan mengambil semua fungsi seperti mengahapus, mengedit
// route::resource('post', PostingController::class);

// route::resource('akun', PostingController::class);




// Route::get('hubungi', function () {
//     return ('ini adalah halaman kontak');
// });
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/beranda', function () {
//     return view('index');
//     return view('reservation');
// });
// Route::get('/articles/{articles}', function ($slug) {
//     return $slug;
// });
// Route::get('/articles', function () {
//     return view('articles');
// });

// Route::get('/article/{artikel}', function ($slug) {

//     $path =__DIR__ . "../resources/articles/{$slug}.php";

//     $article = file_get_contents($path);

//     return view('articles', [
//         'article'=>$article
//     ]);
// });

// route::get('/', function() {
//     return view('website.index');
// });

// route::get('/tampil', function() {
//     $judul ="SNMPTN";
//     $penulis = "john Doe";
//     return view('website.tampil', compact('judul', 'penulis'));
// });

// route::get('/ester', function(){
//         return view('home');
// });
