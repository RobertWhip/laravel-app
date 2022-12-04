<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\UserController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/health', function () {
    $db_status = DB::select(
        DB::raw("select 1 as status")
    );
   
    if ($db_status[0]->status == 1) {
        $status = "Opened database successfully";
    } else {
        $status = "Error: Unable to open database";
    }
  
    return $status;
});

Route::get('/users', [UserController::class, 'index'])
    ->middleware(['auth'])
    ->name('users');
Route::get('/users/create', [UserController::class, 'create'])
    ->middleware(['auth']);
Route::get('/users/{id}', [UserController::class, 'show'])
    ->middleware(['auth']);
Route::post('/users', [UserController::class, 'store'])
    ->middleware(['auth']);
Route::get('/users/{id}/edit', [UserController::class, 'edit'])
    ->middleware(['auth']);
Route::put('/users/{user}', [UserController::class, 'update'])
    ->middleware(['auth']);
Route::delete('/users/{user}', [UserController::class, 'destroy'])
    ->middleware(['auth']);
    
Route::post('/tW5IfmvRiqA2yLm2H26NJSq6UeVsoDoaB0aaCF8H7T1LiCorY9wxy3hnouKDJUaJ/webhook', function () {
    $update = Telegram::commandsHandler(true);
    
    // Commands handler method returns an Update object.
    // So you can further process $update object 
    // to however you want.
    
    return 'ok';
});

require __DIR__.'/auth.php';
