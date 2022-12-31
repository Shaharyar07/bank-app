<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class TransactionController extends Controller
{

    //get all transactions made by user using his account number
    public function getTransactions()
    {
        $accountNumber = \App\Models\Account::where('Account Holder', auth()->user()->name)

            ->get('Account Number');

        $AccountNum = $accountNumber->toArray();
        $accountNumber = $AccountNum[0]['Account Number'];



        //paginate transactions
        $transactions = \App\Models\Transaction::where('Account Number', $accountNumber)->paginate(5);
        return view('transactions', [
            'transactions' => $transactions,
        ]);
    }
}
