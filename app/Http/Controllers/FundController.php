<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FundController extends Controller
{
    //transfer funds
    public function fundTransfer(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric',
            'accountNumber' => 'required|numeric',
        ]);

        $accountNumber = \App\Models\Account::where('Account Holder', auth()->user()->name)

            ->get('Account Number');


        $AccountNum = $accountNumber->toArray();
        $accountNumber = $AccountNum[0]['Account Number'];

        $account = \App\Models\Account::where('Account Number', $request->accountNumber)->get();

        $accountBalance = \App\Models\Account::where('Account Number', $accountNumber)->get('Balance');

        $accountBalance = $accountBalance->toArray();
        $accountBalance = $accountBalance[0]['Balance'];

        $account = $account->toArray();

        if (empty($account)) {
            return back()->with('error', 'Account Number does not exist');
        } else {
            if ($accountBalance < $request->amount) {
                return back()->with('error', 'Insufficient Funds');
            } else {
                $accountBalance = $accountBalance - $request->amount;
                $accountBalance = \App\Models\Account::where('Account Number', $accountNumber)->update(['Balance' => $accountBalance]);

                $accountBalance = \App\Models\Account::where('Account Number', $request->accountNumber)->get('Balance');

                $accountBalance = $accountBalance->toArray();
                $accountBalance = $accountBalance[0]['Balance'];

                $accountBalance = $accountBalance + $request->amount;
                $accountBalance = \App\Models\Account::where('Account Number', $request->accountNumber)->update(['Balance' => $accountBalance]);

                $transaction = new \App\Models\Transaction();
                $transaction['Transaction ID'] = rand(100000000, 999999999);
                $transaction['Account Number'] = $accountNumber;
                $transaction['Transaction Amount'] = $request->amount;
                $transaction['Transaction Status'] = 'Success';
                $transaction['Receiver Name'] = $account[0]['Account Holder'];
                $transaction['Receiver Account Number'] = $request->accountNumber;
                $transaction['Transaction Date'] = date('Y-m-d');


                $transaction->save();

                $transaction = new \App\Models\Transaction();
                $transaction['Transaction ID'] = rand(100000000, 999999999);
                $transaction['Account Number'] = $request->accountNumber;
                $transaction['Transaction Amount'] = $request->amount;
                $transaction['Transaction Status'] = 'Success';
                $transaction['Receiver Name'] = auth()->user()->name;
                $transaction['Receiver Account Number'] = $accountNumber;
                $transaction['Transaction Date'] = date('Y-m-d');


                $transaction->save();

                return back()->with('success', 'Funds Transfered Successfully');
            }
        }
    }
}
