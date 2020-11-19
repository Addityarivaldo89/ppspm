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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/verify-view', [App\Http\Controllers\VerifyController::class, 'index'])->name('verify');
Route::get('view-data', [App\Http\Controllers\AuthorizationController::class, 'viewData']);
Route::get('create-data', [App\Http\Controllers\AuthorizationController::class, 'createData']);
Route::get('edit-data', [App\Http\Controllers\AuthorizationController::class, 'editData']);
Route::get('update-data', [App\Http\Controllers\AuthorizationController::class, 'updateData']);
Route::get('delete-data', [App\Http\Controllers\AuthorizationController::class, 'deleteData']);
Route::get('file-upload', [App\Http\Controllers\FileUploadController::class, 'fileUpload' ])->name('file.upload');
Route::post('file-upload', [App\Http\Controllers\FileUploadController::class, 'fileUploadPost' ])->name('file.upload.post');