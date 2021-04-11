<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\MailController;
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

Route::get('/main', function () {
    return view('main');
});
Route::get('/skin', function () {
    return view('skinproc');
});
Route::get('/manic', function () {
    return view('manicproc');
});
Route::get('/make', function () {
    return view('makeproc');
});
Route::get('/hair', function () {
    return view('hairproc');
});

Route::get('lang/{locale}', [LocalizationController::class, 'index']);

Route::get('skin', [AjaxController::class, 'create']);
Route::post('skin', [AjaxController::class, 'store']);

Route::get('/main',   [UploadController::class, 'uploadForm']);
Route::post('/main', [UploadController::class, 'uploadSubmit']);

Route::get('mail/send',  [MailController::class, 'send']);
