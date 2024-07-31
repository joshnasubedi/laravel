<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
Route::get('/admin', function () {
    return view('admin.layout.master');
});
Route::get('/admin/home', function () {
    return view('admin.pages.home');
})->name('admin.pages.home');
Route::get('/admin/contact', function () {
    return view('admin.pages.contact');
})->name('admin.pages.contact');
// Route::get('/admin/blog/index', function () {
//     return view('admin.blog.index');
// })->name('admin.blog.index');
// Route::get('/admin/blog/create', function () {
//     return view('admin.blog.create');
// })->name('admin.blog.create');
// web.php


Route::get('/admin/blogs/index',[BlogController::class,'index'])->name('admin.blogs.index');
Route::get('/admin/blogs/create',[BlogController::class,'create'])->name('admin.blogs.create');
// Route::get('/public/pages/table',[BlogController::class,'table'])->name('public.pages.table');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
