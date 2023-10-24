<?php

use Illuminate\Support\Facades\Route;

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
Route::fallback(function () {
    return redirect('/')->with('error', "Bạn đã nhập sai đường dẫn");
});

Route::group(['prefix' => '/'], function () {
        Route::controller(HomeController::class)->group(function () {
            // danh sách
            Route::get('/','index')->name('index');
            
            Route::get('/contact','contact')->name('contact');
            Route::post('/contactPost','contactPost')->name('contactPost');
            
            Route::get('/blogs/{id}','blogsItem')->name('blogsItem');
            Route::get('/blogs','blogs')->name('blogs');
            Route::get('/tracks','tracks')->name('tracks');
        });
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/login','login')->name('login');
    Route::post('/login','loginPost')->name('login');
    Route::get('/logout', 'logout')->name('logout');
});
Route::group(['prefix' => 'admin', 'middleware'=>['CheckLoginUser']], function () {
    Route::group(['prefix' => 'banner', 'as' =>'banner.'], function () {
        Route::controller(BannerController::class)->group(function () {
            // danh sách
            Route::get('/','list')->name('list');

            // thêm
            Route::get('/add', 'add')->name('add');
            Route::post('/add', 'addPost')->name('addPost');

            //sửa
            Route::get('edit/{id}','edit')->name('edit');
            Route::post('edit/{id}','editPost')->name('editPost');
            // xóa
            Route::get('/delete/{id}', 'delete')->name('delete');

            // hiển thị tất cả
            Route::get('/show/{id}', 'show')->name('show');
        });
    });
    Route::group(['prefix' => 'book', 'as' =>'book.'], function () {
        Route::controller(BookController::class)->group(function () {
            // danh sách
            Route::get('/','list')->name('list');

            // thêm
            Route::get('/add', 'add')->name('add');
            Route::post('/add', 'addPost')->name('addPost');

            //sửa
            Route::get('edit/{id}','edit')->name('edit');
            Route::post('edit/{id}','editPost')->name('editPost');
            // xóa
            Route::get('/delete/{id}', 'delete')->name('delete');

            // hiển thị tất cả
            Route::get('/show/{id}', 'show')->name('show');
        });
    });
    Route::group(['prefix' => 'blog', 'as' =>'blog.'], function () {
        Route::controller(BlogController::class)->group(function () {
            // danh sách
            Route::get('/','list')->name('list');

            // thêm
            Route::get('/add', 'add')->name('add');
            Route::post('/add', 'addPost')->name('addPost');

            //sửa
            Route::get('edit/{id}','edit')->name('edit');
            Route::post('edit/{id}','editPost')->name('editPost');
            // xóa
            Route::get('/delete/{id}', 'delete')->name('delete');

            // hiển thị tất cả
            Route::get('/show/{id}', 'show')->name('show');
        });
    });
    Route::group(['prefix' => 'product', 'as' =>'product.'], function () {
        Route::controller(ProductController::class)->group(function () {
            // danh sách
            Route::get('/','list')->name('list');

            // thêm
            Route::get('/add', 'add')->name('add');
            Route::post('/add', 'addPost')->name('addPost');

            //sửa
            Route::get('edit/{id}','edit')->name('edit');
            Route::post('edit/{id}','editPost')->name('editPost');
            // xóa
            Route::get('/delete/{id}', 'delete')->name('delete');

            // hiển thị tất cả
            Route::get('/show/{id}', 'show')->name('show');
        });
    });
});
