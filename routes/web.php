<?php

use Illuminate\Support\Facades\Route;
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
    return view(
        'index'
    );
})->name('index');
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/dashboard', function () {
    return view(
        'dashboard',
        [
            'title' => 'Dashboard',
        ]
    );
})->middleware('auth');
Route::get('/investments', function () {
    return view('investments', [
        'title' => 'Investments',
    ]);
});
Route::get('/transactions', function () {
    return view(
        'transactions',
        [
            'title' => 'Transactions',
            "transactions" => \App\Models\Transaction::all(),

        ]
    );
})->middleware('auth');
Route::get('/transferFunds', function () {
    return view(
        'transferFunds',
        [
            'title' => 'Transfer Funds',
        ]
    );
})->middleware('auth');
Route::get('/profile', function () {
    return view(
        'profile',
        [
            'title' => 'Profile',
        ]
    );
})->middleware('auth');

// Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate'])->middleware('guest');

// Create New User
Route::post('/register', [UserController::class, 'store'])->middleware('guest');

// Logout User
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');
