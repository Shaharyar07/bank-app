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
        $transactions = \App\Models\Transaction::where('Account Number', $accountNumber)->latest()->paginate(5);
        return view('transactions', [
            'transactions' => $transactions,
        ]);
    }

    //search for transactions
    public function search(Request $request)
    {
        // Get the search query
        $search = $request->search;
        // Return the search results as a JSON response
        $accountNumber = \App\Models\Account::where('Account Holder', auth()->user()->name)

            ->get('Account Number');

        $AccountNum = $accountNumber->toArray();
        $accountNumber = $AccountNum[0]['Account Number'];
        $transactions = \App\Models\Transaction::where('Account Number', $accountNumber)->latest();


        return response()->json($transactions->get());
    }
}
