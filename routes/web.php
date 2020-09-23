<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemogController;

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

// メモグ一覧画面を表示
Route::get('/',[MemogController::class,'showList'])->name('memogs');

// メモグ登録画面を表示
Route::get('/memog/create',[MemogController::class,'showCreate'])->name('create');
// メモグ登録
Route::post('/memog/store',[MemogController::class,'exeStore'])->name('store');

// メモグ詳細画面を表示
Route::get('/memog/{id}',[MemogController::class,'showDetail'])->name('show');

// メモグ編集画面を表示
Route::get('/memog/edit/{id}',[MemogController::class,'showEdit'])->name('edit');
// メモグ登録
Route::post('/memog/update',[MemogController::class,'exeUpdate'])->name('update');

// メモグ削除
Route::post('/memog/delete/{id}',[MemogController::class,'exeDelete'])->name('delete');