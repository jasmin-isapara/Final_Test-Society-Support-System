<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\User\ComplainController;
use App\Http\Controllers\User\CategoryController;
use App\Http\Controllers\CaptchaValidationController;

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
Route::get("about", function () {
    return view("about");
});

// Route::get("complain", [ComplainController::class, "UserComplainList"]);
Route::get('category', [CategoryController::class,'index']);





Route::get("contact", [ContactController::class, "index"]);
Route::put("contact", [ContactController::class, "store"]);

Route::get('add-complain',[ComplainController::class,'index']);
Route::post('add-complain',[ComplainController::class,'create']);
Route::post('add-complain', [ComplainController::class,'store']);
Route::get("complain", [ComplainController::class, "complainList"]);



Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Route::prefix('admin')->middleware(['auth','is_admin'])->group(function ()
{
    Route::get('category', [App\Http\Controllers\Admin\CategoryController::class,'index']);
    Route::get('add-category', [App\Http\Controllers\Admin\CategoryController::class,'create']);
    Route::post('add-category', [App\Http\Controllers\Admin\CategoryController::class,'store']);
    Route::get('edit-category/{category_id}', [App\Http\Controllers\Admin\CategoryController::class,'edit']);
    Route::put('update-category/{category_id}', [App\Http\Controllers\Admin\CategoryController::class,'update']);
    Route::get('delete-category/{category_id}', [App\Http\Controllers\Admin\CategoryController::class,'destroy']);


    Route::get('complains',[App\Http\Controllers\Admin\ComplainController::class,'index']);
    Route::get('add-complain',[App\Http\Controllers\Admin\ComplainController::class,'create']);
    Route::post('add-complain',[App\Http\Controllers\Admin\ComplainController::class,'store']);
    Route::get('complain/{complain_id}',[App\Http\Controllers\Admin\ComplainController::class,'edit']);
    Route::put('update-complain/{complain_id}',[App\Http\Controllers\Admin\ComplainController::class,'update']);
    Route::get('delete-complain/{complain_id}',[App\Http\Controllers\Admin\ComplainController::class,'destroy']);

    Route::get('comments',[App\Http\Controllers\CommentController::class,'index']);
    Route::get('view-comment/{id}',[App\Http\Controllers\CommentController::class,'edit']);
    Route::put('add-comment/{id}',[App\Http\Controllers\CommentController::class,'update']);
    Route::get('delete-comment/{id}',[App\Http\Controllers\CommentController::class,'destroy']);

    // Route::post('addUser',[App\Http\Controllers\Admin\UserRegisterController::class,'create']);

    Route::get('users',[App\Http\Controllers\Admin\UserController::class,'index']);
    Route::get('user/{user_id}',[App\Http\Controllers\Admin\UserController::class,'edit']);
    Route::put('update-user/{user_id}',[App\Http\Controllers\Admin\UserController::class,'update']);

    Route::get('add-user',[App\Http\Controllers\Admin\AddUserController::class,'index']);
    Route::post('add-user',[App\Http\Controllers\Admin\AddUserController::class,'create']);


    // Route::get('refresh_captcha',[HomeController::class,'refreshCaptcha']);

    // composer require mews/captcha

    // Route::get('contact-form-captcha', [CaptchaValidationController::class, 'index']);
    // Route::post('captcha-validation', [CaptchaValidationController::class, 'capthcaFormValidate']);
    // Route::get('reload-captcha', [CaptchaValidationController::class, 'reloadCaptcha']);




});
