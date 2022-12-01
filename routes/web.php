<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontStageController;
use App\Http\Controllers\BackStageController;

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

Route::get('/admin', [BackStageController::class,'mainList'])->middleware(['auth', 'verified']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';



Route::get('/',[FrontStageController::class,'index']);
Route::get('/home',[FrontStageController::class,'index'])->name('home');
Route::get('/news',[FrontStageController::class,'news'])->name('news');
Route::get('/room5',[FrontStageController::class,'room5'])->name('room');
Route::get('/room7',[FrontStageController::class,'room7'])->name('room');
Route::get('/booking',[FrontStageController::class,'booking'])->name('booking');
Route::get('/story',[FrontStageController::class,'story'])->name('story');
Route::get('/location',[FrontStageController::class,'location'])->name('location');

Route::get('/admin/main-news-list',[BackStageController::class,'mainList'])->middleware(['auth', 'verified']);
Route::get('/admin/add-main-news',[BackStageController::class,'mainAdd'])->middleware(['auth', 'verified']);
Route::get('/admin/news-list',[BackStageController::class,'newsList'])->middleware(['auth', 'verified']);
Route::get('/admin/add-news',[BackStageController::class,'newsAdd'])->middleware(['auth', 'verified']);

// Route::get('/admin/register', function () {
//     return view('welcome');
// });

//新增消息
Route::post('/admin/addnews',[BackStageController::class,'addnews'])->middleware(['auth', 'verified']);
Route::post('/admin/addmainnews',[BackStageController::class,'addmainnews'])->middleware(['auth', 'verified']);

//編輯一般消息
Route::get('/admin/news-edit/{id}',[BackStageController::class,'newsedit'])->middleware(['auth', 'verified']);
Route::POST('/admin/news-edit-upload/{id}',[BackStageController::class,'newseditchecked'])->middleware(['auth', 'verified']);

//編輯主要消息
Route::get('/admin/main-edit/{id}',[BackStageController::class,'mainedit'])->middleware(['auth', 'verified']);
Route::POST('/admin/main-edit-upload/{id}',[BackStageController::class,'maineditchecked'])->middleware(['auth', 'verified']);

//刪除消息
Route::get('/admin/news-del/{id}',[BackStageController::class,'newsDel'])->middleware(['auth', 'verified']);
Route::get('/admin/main-del/{id}',[BackStageController::class,'mainDel'])->middleware(['auth', 'verified']);


