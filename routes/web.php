<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('user',[app\http\controllers\usercontroller::class,'index'])->middleware(['CheckLevel:admin'])->name('user.index');
Route::get('user/create',[app\http\controllers\usercontroller::class,'create'])->middleware(['CheckLevel:admin'])->name('user.create');
Route::post('user/store',[app\http\controllers\usercontroller::class,'store'])->middleware(['CheckLevel:admin'])->name('user.store');
Route::get('user/edit/{id}',[app\http\controllers\usercontroller::class,'edit'])->middleware(['CheckLevel:admin'])->name('user.edit');
Route::put('user/update/(id)',[app\http\controllers\usercontroller::class,'update'])->middleware(['CheckLevel:admin'])->name('user.update');
Route::get('user/show/(id)',[app\http\controllers\usercontroller::class,'show'])->middleware(['CheckLevel:admin'])->name('user.show');
Route::delete('user/delete/(id)',[app\http\controllers\usercontroller::class,'destory'])->middleware(['CheckLevel::admin'])->name('user.delete');

