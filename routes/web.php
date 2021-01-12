<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

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
    return redirect('login');
});
Route::get('login', function () {
    if(Auth::check()) return redirect('home');
    return view('user.login');
})->name('user.login');
Route::middleware('auth')->group(function(){
    Route::get('home',  function(){
        return view('user.home');
    })->name('home');
});


Route::get('/admin', function () {
    return redirect('admin/login');
});

Route::middleware('admin')->group(function(){
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/admin/users', 'UserController@index')->name('admin.users.index');
    Route::get('/admin/users/create', 'UserController@create')->name('admin.users.create');
    Route::post('/admin/users', 'UserController@store')->name('admin.users.store');
    Route::get('/admin/users/{id}/edit', 'UserController@edit')->name('admin.users.edit');
    Route::put('/admin/users/{id}', 'UserController@update')->name('admin.users.update');
    Route::get('/admin/users/{id}/delete', 'UserController@destroy')->name('admin.users.destroy');
});

Route::post('login', [UserController::class, 'login']);
Route::get('logout', [UserController::class, 'logout']);