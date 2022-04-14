<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SinglePageController;

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
    $post = DB::table('posts')->get();
    return view('index', ['posts' => $post]);
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'auth']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/profile', [ProfileController::class, 'index']);
Route::post('/profile/edit', [ProfileController::class, 'update']);
Route::post('/profile/delete', [ProfileController::class, 'delete']);
// Route::get('/profile', [ProfileController::class, 'index']);
// Route::get('/user', [UserController::class,'registrasi']);
// Route::get('/page', [SinglePageController::class, 'index']);
// Route::post('/page', [SinglePageController::class, 'post']);
// Route::post('login/auth', [LoginController::class, 'auth'])->name('login.auth');
// Route::get('/categories', [CategoryController::class, 'index']);


