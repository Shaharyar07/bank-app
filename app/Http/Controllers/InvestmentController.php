<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvestmentController extends Controller
{
    //get profits based on investment amount of user from the Account
    public function getProfits()
    {
        $account = \App\Models\Account::where('Account Holder', auth()->user()->name)->get();

        $account = $account->toArray();

        $accountBalance = $account[0]['Balance'];

        $profits = $accountBalance * 0.05;

        //percentage of profit from previous investment
        $percentage = $profits / $accountBalance * 100;



        return view('investments', [
            'profits' => $profits,
            'percentage' => $percentage,
        ]);
    }
    //get profits from all the users
    public function getProfitsAll()
    {
        $accounts = \App\Models\Account::all();

        $accounts = $accounts->toArray();

        $totalProfits = 0;

        foreach ($accounts as $account) {
            $totalProfits += $account['Balance'] * 0.05;
        }

        return view('investments', [
            'totalProfits' => $totalProfits,
        ]);
    }
    //get profits from all the new users
    public function getProfitByUsers()
    {
        $accounts = \App\Models\Account::all();

        $accounts = $accounts->toArray();

        $newProfits = 0;
        $oldProfits = 0;

        foreach ($accounts as $account) {
            if ($account['Account Status'] == 'Active') {
                $newProfits += $account['Balance'] * 0.05;
            } elseif ($account['Account Status'] == 'Inactive') {
                $oldProfits += $account['Balance'] * 0.01;
            }
        }

        return view('investments', [
            'newProfits' => $newProfits,
            'oldProfits' => $oldProfits,
        ]);
    }
}
