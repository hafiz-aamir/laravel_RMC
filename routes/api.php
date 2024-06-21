<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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


Route::delete('del_wp_users', [ApiController::class, 'del_wp_users']);

Route::delete('del_wp_coaches', [ApiController::class, 'del_wp_coaches']);

Route::delete('del_wp_schools', [ApiController::class, 'del_wp_schools']);

Route::delete('del_rates', [ApiController::class, 'del_rates']);

Route::delete('del_wp_sports', [ApiController::class, 'del_wp_sports']);

Route::delete('del_wp_gender', [ApiController::class, 'del_wp_gender']); 

Route::delete('del_wp_conference', [ApiController::class, 'del_wp_conference']);

Route::delete('del_wp_submit_corrections', [ApiController::class, 'del_wp_submit_corrections']); 

Route::delete('del_users', [ApiController::class, 'del_users']);

Route::get('base_url/{url_status?}', [ApiController::class, 'base_url']);
