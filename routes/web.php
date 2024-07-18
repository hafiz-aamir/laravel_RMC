<?php


Route::get('/clear-config', function() 
{
    Artisan::call('config:clear');
    
return "config is cleared";
});


Route::get('/clear-cache', function() 
{
    Artisan::call('cache:clear');
    
return "Cache is cleared";
});


use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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


$get_url = DB::table('base_urls')->where('id', '1')->first();


if($get_url->status == "0")
{



Route::get('/', function () {
    return view('welcome');
});




Auth::routes();


Route::get('/adminlogin', [App\Http\Controllers\HomeController::class, 'adminlogin'])->name('adminlogin'); 

/Add_review', [App\Http\Controllers\HomeController::class, 'Add_review'])->name('Add_review'); 
Route::post('/Add_flag_review', [App\Http\Controllers\HomeController::class, 'Add_flag_review'])->name('Add_flag_review');

  


    
}
