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
Route::get('verify-view/{userid?}', [App\Http\Controllers\VerifyController::class, 'index'], function ($userid) {
    return view('verify', ['userid' => $userid]);
})->name('verify');
Route::put('verify-view/{userid?}', [App\Http\Controllers\VerifyController::class, 'update'], function ($userid) {
    return view('verify', ['userid' => $userid]);
})->name('verify.checked');
Route::get('view-data', [App\Http\Controllers\AuthorizationController::class, 'viewData']);
Route::get('create-data', [App\Http\Controllers\AuthorizationController::class, 'createData']);
Route::get('edit-data', [App\Http\Controllers\AuthorizationController::class, 'editData']);
Route::get('update-data', [App\Http\Controllers\AuthorizationController::class, 'updateData']);
Route::get('delete-data', [App\Http\Controllers\AuthorizationController::class, 'deleteData']);
Route::get('spm-tiga', [App\Http\Controllers\FileUploadController::class, 'spmTiga' ])->name('spm.tiga');
Route::get('spm-up', [App\Http\Controllers\FileUploadController::class, 'spmUp' ])->name('spm.up');
Route::get('spm-bendahara', [App\Http\Controllers\FileUploadController::class, 'spmBendahara' ])->name('spm.bendahara');
Route::get('spm-gaji', [App\Http\Controllers\FileUploadController::class, 'spmGaji' ])->name('spm.gaji');
Route::post('file-upload', [App\Http\Controllers\FileUploadController::class, 'fileUploadPost' ])->name('file.upload.post');