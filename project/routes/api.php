<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecordController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//List records
Route::get('records', [RecordController::class, 'index']);

//List single record
Route::get('record/{id}', [RecordController::class, 'show']);

//create new record
Route::post('record', [RecordController::class, 'store']);

//update record
Route::put('record', [RecordController::class, 'store']);

//delete record
Route::delete('record/{id}', [RecordController::class, 'destroy']);
