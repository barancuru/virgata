<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\NodeController;
=======
>>>>>>> 2ef141ec3131092ad637695ca7bbd252f295c6e2

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
<<<<<<< HEAD

// NodeController ile ilgili tüm resource rotalarını tanımlayın
Route::apiResource('nodes', NodeController::class);
=======
>>>>>>> 2ef141ec3131092ad637695ca7bbd252f295c6e2
