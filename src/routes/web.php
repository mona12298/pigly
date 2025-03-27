<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;

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

Route::get('/register/step1', [RegisteredUserController::class, 'create']);
Route::get('/register', function () {
    return redirect('/register/step1');
});
Route::post('/register/step1', [RegisteredUserController::class, 'store']);

Route::middleware('auth')->group(function () {
    Route::get('/register/step2', [UserController::class, 'target']);
    Route::post('/register/step2', [UserController::class, 'storeTarget']);
    Route::get('/weight_logs', [UserController::class, 'admin']);

    Route::prefix('/weight_logs')->group(function () {
    Route::get('create', [UserController::class,'create']);
    Route::post('create', [UserController::class,'createTarget']);
    Route::get('search', [UserController::class,'search']);

    Route::get('{weightLogId}',[UserController::class,'detail']);
    Route::patch('{weightLogId}/update', [UserController::class,'update']);
    Route::delete('{weightLogId}/delete', [UserController::class, 'delete']);

    Route::get('goal_setting', [UserController::class,'set']);
    Route::post('goal_setting', [UserController::class,'setGoal']);

    });

});