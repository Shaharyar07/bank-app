<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //get user account details
    public function getAccount()
    {
        $account = \App\Models\Account::where('Account Holder', auth()->user()->name)->get();

        return view('dashboard', [
            'account' => $account[0],
        ]);
    }
}
