<?php

namespace App\Http\Controllers;

use App\Mail\transactionMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Transaction;
use App\User;
use Auth;
use DateTime;

class TransactionController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
    }


    public function showOnGoingTransactions() {

        $transactions_rented = Transaction::join('users', 'transactions.renter_id', '=', 'users.id')
        ->join('user_items', 'transactions.user_item_id', '=', 'user_items.id')
        ->join('items', 'user_items.item_id', '=', 'items.id')
        ->where('transactions.renter_id', Auth::id())
        ->get([
            'transactions.id',
            'transactions.start_date',
            'transactions.end_date',
            'transactions.status',
            'users.name as user_name',
            'users.id as user_id',
            'user_items.thumbnail',
            'user_items.id as user_item_id',
            'items.name as item_name'
            ]);

        $transactions_owned = Transaction::join('users', 'transactions.owner_id', '=', 'users.id')
        ->join('user_items', 'transactions.user_item_id', '=', 'user_items.id')
        ->join('items', 'user_items.item_id', '=', 'items.id')
        ->where('transactions.owner_id', Auth::id())
        ->get([
            'transactions.id',
            'transactions.start_date',
            'transactions.end_date',
            'transactions.status',
            'users.name as user_name',
            'users.id as user_id',
            'user_items.thumbnail',
            'user_items.id as user_item_id',
            'items.name as item_name'
            ]);

        return view('transactions.ongoing', [
            'transactions_rented' => $transactions_rented,
            'transactions_owned' => $transactions_owned
            ]
            );
        
    }

    public function sendMail(Request $request, $id) {
        Mail::to(User::find($id)->email)->send(new transactionMessage($request->message));

        return back();
    }

    public function showTransactionsHistory() {

        return view('transactions.history');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $transaction = Transaction::where('transactions.id', $id)
        ->join("users", "transactions.owner_id", "users.id")
        ->join("user_items", "transactions.user_item_id", "user_items.id")
        ->join("items", "user_items.item_id", "items.id")
        ->first([
            "transactions.start_date",
            "transactions.end_date",
            "users.name as user_name",
            "user_items.price",
            "user_items.thumbnail",
            "items.name as item_name",
            ]);

        $start_date = new DateTime($transaction->start_date);
        $end_date = new DateTime($transaction->end_date);

        $total_days = $start_date->diff($end_date)->format("%a");

        $total_price = $transaction->price * $total_days;

        $owned = false;
        $user_id = '';

        if(count(Transaction::find($id)->where('owner_id', Auth::id())->get()) > 0) {
            $owned = true;

            $user_id = Transaction::where('transactions.id', $id)
            ->join("users", "transactions.renter_id", "users.id")
            ->first(['users.id'])->id;
        } else {
            $user_id = Transaction::where('transactions.id', $id)
            ->join("users", "transactions.owner_id", "users.id")
            ->first(['users.id'])->id;
        }

        return view("transactions.show", [
            "transaction" => $transaction,
            "total_days" => $total_days,
            "total_price" => $total_price,
            "owned" => $owned,
            "user_id" => $user_id
            ]
            );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction) {
        //
    }
}
