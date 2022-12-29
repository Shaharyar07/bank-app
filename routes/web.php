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
});
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
});
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
});
Route::get('/transferFunds', function () {
    return view(
        'transferFunds',
        [
            'title' => 'Transfer Funds',
        ]
    );
});
Route::get('/profile', function () {
    return view(
        'profile',
        [
            'title' => 'Profile',
        ]
    );
});

// Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
