<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvestmentController extends Controller
{
    //get profits based on investment amount of user from the Account
    public function getProfits()
    {
        $Account = \App\Models\Account::where('Account Holder', auth()->user()->name)->get();

        $Account = $Account->toArray();

        $accountBalance = $Account[0]['Balance'];

        $profits = $accountBalance * 0.05;

        //percentage of profit from previous investment
        $percentage = $profits / $accountBalance * 100;


        $accounts = \App\Models\Account::all();

        $accounts = $accounts->toArray();

        $totalProfits = 0;

        foreach ($accounts as $account) {
            $totalProfits += $account['Balance'] * 0.05;
        }
        //
        $newProfits = 0;
        $oldProfits = 0;

        foreach ($accounts as $account) {
            if ($account['Status'] == 'Active') {
                $newProfits += $account['Balance'] * 0.05;
            } elseif ($account['Status'] == 'Inactive') {
                $oldProfits += $account['Balance'] * 0.01;
            }
        }

        return view('investments', [
            'profits' => $profits,
            'percentage' => $percentage,
            'totalProfits' => $totalProfits,
            'newProfits' => $newProfits,
            'oldProfits' => $oldProfits

        ]);
    }
}
