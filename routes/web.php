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
// Auth::routes();

// Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
// Route::get('/login', [App\Http\Controllers\LoginController::class, 'index'])->name('login');
// Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);

// Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

// Registration Routes...
// Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('/register', 'Auth\RegisterController@register');

// Password Reset Routes...
// Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
// Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
// Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
// Route::post('/password/reset', 'Auth\ResetPasswordController@reset');


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::get('/login', [App\Http\Controllers\LoginController::class, 'index'])->name('index.login');

Route::post('/login/save', [App\Http\Controllers\LoginController::class, 'save'])->name('save.login');

Route::get('/register', [App\Http\Controllers\LoginController::class, 'register'])->name('index.register');

Route::post('/register/save', [App\Http\Controllers\LoginController::class, 'register_save'])->name('save.register');

Route::get('/avatar/{id}', [App\Http\Controllers\LoginController::class, 'editarAvatar'])->name('avatar.editar');
Route::post('/avatar/editar/{id}', [App\Http\Controllers\LoginController::class, 'avatar'])->name('avatar.save');

// LOGIN PELO FACEBOOK

Route::get('login/facebook', [App\Http\Controllers\SocialiteController::class, 'redirectToProvider_facebook'])->name('login.facebook');

Route::get('login/facebook/callback', [App\Http\Controllers\SocialiteController::class, 'handleProviderCallback_facebook']);

// LOGIN PELO GOOGLE

Route::get('login/google', [App\Http\Controllers\SocialiteController::class, 'redirectToProvider'])->name('login.google');

Route::get('login/google/callback', [App\Http\Controllers\SocialiteController::class, 'handleProviderCallback']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// PÁGINA DO CLIENTE

Route::get('page/clientes', [App\Http\Controllers\clientes\pageClientesController::class, 'index'])->name('page.clientes')->middleware('clientes');

// ENDEREÇO

Route::get('page/clientes/endereco', [App\Http\Controllers\clientes\endereco\enderecoController::class, 'index'])->name('endereco.index')->middleware('clientes');

Route::get('page/clientes/endereco/cadastrar', [App\Http\Controllers\clientes\endereco\enderecoController::class, 'cadastrar'])->name('endereco.cadastrar')->middleware('clientes');