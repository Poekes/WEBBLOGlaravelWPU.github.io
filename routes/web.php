<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Category;
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
    return view('home',[
        'title'=>'Home',
    ]);
});
Route::get('/about', function () {
    return view('about',[
        'title'=>'About',
        'name'=>'akbar',
        'email'=>'akbar@asc.co',
    ]);
});

Route::get('/blog', [PostController::class,'index']);




Route::get('posts/{post:slug}',[PostController::class,'show']);

Route::get('categories', function(){
    return view('categories',[
        'title'=>'categories',
        'category'=>Category::all(),
    ]);
});
Route::get('categories/{category:slug}', function(Category $category){
    return view('category',[
        'title'=>$category->name,
        'category'=>$category->name,
        'posts'=>$category->posts,
    ]);
});
Route::get('authors/{author:username}', function(User $author){
    return view('posts',[
        'title'=>'User Post',
        'posts'=>$author->posts,
    ]); 
});