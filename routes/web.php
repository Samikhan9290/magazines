<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MagazineController;
use App\Http\Controllers\CommentController;

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
//


Route::get('/',[HomeController::class,'index']);
Route::get('/singleMagazine/{id}',[HomeController::class,'singleMagazine']);
Route::get('/category/{id}',[HomeController::class,'category']);
Route::post('/comments',[HomeController::class,'comments']);


//
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::group(['middleware'=>'auth:sanctum','verified'],function (){
    Route::get('redirect',[HomeController::class,'redirect']);
    Route::get('/admin/category',[CategoryController::class,'index']);
    Route::get('/admin/manage-category',[CategoryController::class,'show']);
    Route::post('/admin/manage-category',[CategoryController::class,'create']);
    Route::get('admin/category/delete/{id}',[CategoryController::class,'destroy']);
    Route::get('admin/category/status/{status}/{id}',[CategoryController::class,'status']);
    Route::get('admin/category/edit/{id}',[CategoryController::class,'edit']);
    Route::put('admin/category/edit/{id}',[CategoryController::class,'update']);


    //magazines routes
    Route::get('admin/magazine',[MagazineController::class,'index']);
    Route::get('/admin/manage-magazines',[MagazineController::class,'show']);
    Route::post('/admin/manage-magazines',[MagazineController::class,'store']);
    Route::get('admin/magazine/status/{status}/{id}',[MagazineController::class,'status']);
    Route::get('admin/magazine/delete/{id}',[MagazineController::class,'destroy']);
    Route::get('admin/magazine/edit/{id}',[MagazineController::class,'edit']);
    Route::get('admin/magazine/view/{id}',[MagazineController::class,'view']);
    Route::put('admin/magazine/edit/{id}',[MagazineController::class,'update']);

    Route::get('admin/comment',[CommentController::class,'index']);
    Route::get('admin/comment/status/{status}/{id}',[CommentController::class,'status']);
    Route::get('admin/comment/delete/{id}',[CommentController::class,'destroy']);



///front
/// Route for users
Route::get('admin/users_list',[CategoryController::class,'users']);
    Route::get('admin/users/delete/{id}',[CategoryController::class,'delete_user']);
    Route::get('admin/users/status/{status}/{id}',[CategoryController::class,'User_status']);



});



