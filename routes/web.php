<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;



//laravel9.test
Route::view("/", "welcome")->name('home');
Route::view("/contact", "contact")->name('contact');

// //nota
// Route::get("/blog", [PostController::class, 'index'])->name('posts.index');
// Route::get("/blog/create", [PostController::class, 'create'])->name('posts.create');
// Route::post("/blog", [PostController::class, 'store'])->name('posts.store');

// Route::get("/blog/{post}", [PostController::class, 'show'])->name('posts.show');
// Route::get("/blog/{post}/edit", [PostController::class, 'edit'])->name('posts.edit');

// Route::patch("/blog/{post}", [PostController::class, 'update'])->name('posts.update');
// Route::delete("/blog/{post}", [PostController::class, 'destroy'])->name('posts.destroy');

route::resource('blog', PostController::class, [
    'names' => 'posts',
    'parameters' => ['blog' => 'post']
]);


Route::view("/about", "about")->name('about')->middleware('auth');

Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

route::view('/login', 'auth.login')->name('login');
route::view('/register', 'auth.register')->name('register');
Route::post('/register', [RegisteredUserController::class,'store']);

// {nota
// (Route::get('/', function () {
//     return view('welcome');
// });
// route::match(['put', 'patch'], '/', function(){
//     para cuando se nesecitan 2 metodos ej: put y match
// });
// route::any('/', function(){
//     para cuando se nesecitan mas de 2 metodos 
// });)}
