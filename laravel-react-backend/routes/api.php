<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\RestController;

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



Route::prefix('tests')->group(function (){
        Route::get('/view',[RestController::class,'view'])->name('test.view');
        Route::get('/show/{id}',[RestController::class,'show'])->name('test.show');
        Route::post('/store',[RestController::class,'store'])->name('test.store');
        Route::get('/edit/{id}',[RestController::class,'edit'])->name('test.edit');
        Route::post('/update/{id}',[RestController::class,'update'])->name('test.update');
        Route::post('/delete/{id}',[RestController::class,'destroy'])->name('test.delete');

});