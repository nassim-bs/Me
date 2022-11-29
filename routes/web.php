<?php

use App\Http\Controllers\ControllerHome;
use App\Http\Controllers\PosteLapController;
use App\Http\Controllers\CustomAuthController;
use Illuminate\Support\Facades\Route;


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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('', [ControllerHome::class, 'index']);
/* Route::get('/000', function () {
    return view('auth.dashboard');
}); */



Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 

Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

// Route::get('/add', [ControllerHome::class, 'create']);
// Route::post('/AddPost',[ControllerHome::class, 'store']);

Route::get('/PosteLaps', [PosteLapController::class, 'index']);

Route::get('/add-PosteLap', [PosteLapController::class, 'create']);
Route::post('/add-PosteLap', [PosteLapController::class, 'store']);

Route::get('edit-PosteLap/{id}', [PosteLapController::class, 'edit']);
Route::put('update-PosteLap/{id}', [PosteLapController::class, 'update']);

Route::delete('delete-PosteLap/{id}', [PosteLapController::class, 'destroy']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
