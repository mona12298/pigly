<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\WeightLog;
use App\Models\WeightTarget;
use App\Http\Requests\WeightTargetRequest;
use App\Http\Requests\WeightLogRequest;



class UserController extends Controller
{
    public function target(){
        return view('register2');
    }

    public function storeTarget(WeightTargetRequest $request){
        $user = Auth::user();
        WeightTarget::updateOrCreate(
            ['user_id' => $user->id],
            ['target_weight' => $request->input('target_weight')]
        );
        WeightLog::create([
            'user_id' => $user->id,
            'date'    => now()->toDateString(),
            'weight'  => $request->input('weight'),
        ]);
        return redirect('/weight_logs');
    }

    public function admin(){
        return view('admin');
    }

}


// Route::middleware('auth')->group(function () {
//     Route::get('/register/step2', [UserController::class, 'target']);
//     Route::post('/register/step2', [UserController::class, 'storeTarget']);
//     Route::get('/weight_logs', [UserController::class, 'admin']);

//     Route::prefix('/weight_logs')->group(function () {
//         Route::get('create', [UserController::class,'create']);
//         Route::post('create', [UserController::class,'createTarget']);
//         Route::get('search', [UserController::class,'search']);

//         Route::get('{weightLogId}',[UserController::class,'detail']);
//         Route::patch('{weightLogId}/update', [UserController::class,'update']);
//         Route::delete('{weightLogId}/delete', [UserController::class, 'delete']);

//         Route::get('goal_setting', [UserController::class,'set']);
//         Route::post('goal_setting', [UserController::class,'setGoal']);
//     });
// });
