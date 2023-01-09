<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //get user account details
    public function getAccount()
    {
        $account = \App\Models\Account::where('Account Holder', auth()->user()->name)->get();
        //count all the transactions made by user
        $transactions = \App\Models\Transaction::where('Account Number', $account[0]['Account Number'])->count();




        return view('dashboard', [
            'account' => $account[0],
            'transactions' => $transactions,
        ]);
    }
}
