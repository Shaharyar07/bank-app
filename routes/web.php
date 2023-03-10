<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FundController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InvestmentController;
use App\Http\Controllers\TransactionController;


use App\Models\Transaction;
use Illuminate\Http\Request;

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
    return view('dashboard');
})->middleware('auth');


Route::get('/investments', [InvestmentController::class, 'getProfits'])->middleware('auth');

Route::get('/transactions', [TransactionController::class, 'getTransactions'])->middleware('auth');

Route::get('/transferFunds', function () {
    return view('transferFunds');
})->middleware('auth');

Route::get('/profile', function () {
    return view('profile');
})->middleware('auth');

// Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate'])->middleware('guest');

// Create New User
Route::post('/register', [UserController::class, 'store'])->middleware('guest');

// Logout User
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// transfer funds
Route::post('/fundTransfer', [FundController::class, 'fundTransfer'])->middleware('auth');

//search transactions
Route::get(
    '/search',[TransactionController::class, 'search']
)->middleware('auth');
