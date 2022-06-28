<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\LoginController;

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

Route::get('/', [PagesController::class,'home'])->name('home');



//deliveryman routes
Route::get('/teacher/create',[TeacherController::class,'create'])->name('teacher.create');
Route::post('/teacher/create',[TeacherController::class,'createSubmit'])->name('teacher.create');
Route::get('/teacher/list',[TeacherController::class,'list'])->name('teacher.list');
Route::get('/teacher/edit/{id}/{name}',[TeacherController::class,'edit']);
Route::post('/teacher/edit',[TeacherController::class,'editSubmit'])->name('teacher.edit');
Route::get('/teacher/delete/{id}/{name}',[TeacherController::class,'delete']);

//Login routes
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'loginSubmit'])->name('login');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

//Userdash
Route::get('/teacher/dash', [PagesController::class,'teacherdash'])->name('teacherdash')->middleware('ValidTeacher');