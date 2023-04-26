<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DepartmentController;
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

Route::get('/login', function () {
    return view('login.login');
})->name('home');
Route::get('/admin', function () {
    return view('adminside.admin');
});
Route::get('/department', function () {
    return view('adminside.department');
});
Route::get('/course', function () {
    return view('adminside.course');
});



//Login and registration backend
Route::get('/', [AuthManager::class,'login'])->name('login');
Route::post('/login', [AuthManager::class,'loginPost'])->name('login.post' );
Route::get('/registration', [AuthManager::class,'registration'])->name('registration');
Route::post('/registration', [AuthManager::class,'registrationPost'])->name('registration.post');
Route::get('/logout', [AuthManager::class,'logout'])->name('logout');
//Add department backend
Route::get('/department', [DepartmentController::class,'department'])->name('department');
Route::post('/department', [DepartmentController::class,'departmentPost'])->name('department.post');
Route::get('/department', [DepartmentController::class,'show'])->name('department');
Route::get('click_delete/{id}', [DepartmentController::class,'delete'])->name('department');

//Course backend





