<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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
    return view('home');
});

Auth::routes();


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



$groupData = [
    'namespace' => 'Blog\Admin',
    'prefix' => 'admin/blog'
];
Route::prefix('admin')->middleware('can:is-admin,\App\Models\User')->group(function() {
    //BlogCategory
   $methods = ['index', 'edit', 'store', 'update', 'create',];
   Route::resource('categories', 'Blog\Admin\CategoryController')
       ->only($methods)
       ->names('blog.admin.categories');

   //BlogPost
    Route::resource('posts', 'Blog\Admin\PostController')
        ->except(['show'])
        ->names('blog.admin.posts');

    Route::get('/blog/posts', [\App\Http\Controllers\Blog\Admin\PostController::class, 'filter'])->name('filter');

});


//Route::resource('rest', 'RestTestController')->names('restTest');


