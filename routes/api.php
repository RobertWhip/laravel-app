<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/tW5IfmvRiqA2yLm2H26NJSq6UeVsoDoaB0aaCF8H7T1LiCorY9wxy3hnouKDJUaJ/webhook', function () {
    $update = Telegram::commandsHandler(true);
    
    // Commands handler method returns an Update object.
    // So you can further process $update object 
    // to however you want.
    
    return 'ok';
});
