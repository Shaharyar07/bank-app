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
    public function searchTransactions(Request $request)

    {

        if ($request->ajax()) {
            dd($request);
            $accountNumber = \App\Models\Account::where('Account Holder', auth()->user()->name)

                ->get('Account Number');

            $AccountNum = $accountNumber->toArray();
            $accountNumber = $AccountNum[0]['Account Number'];

            $search = $request->get('search');
            $transactions = \App\Models\Transaction::where('Account Number', $accountNumber)
                ->where('Transaction Type', 'like', '%' . $search . '%')
                ->orWhere('Amount', 'like', '%' . $search . '%')
                ->orWhere('Date', 'like', '%' . $search . '%')
                ->orWhere('Time', 'like', '%' . $search . '%')
                ->orWhere('Account Number', 'like', '%' . $search . '%')
                ->orWhere('Account Name', 'like', '%' . $search . '%')
                ->orWhere('Account Balance', 'like', '%' . $search . '%')
                ->orWhere('Transaction ID', 'like', '%' . $search . '%')
                ->orWhere('Narration', 'like', '%' . $search . '%')
                ->latest()->paginate(5);
            return view('transactions', [
                'transactions' => $transactions,
            ]);
        }
    }
}
