<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use Auth;

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
        // Calculate total days and total price here
        
        $transactions_owned = Transaction::join('users', 'transactions.owner_id', '=', 'users.id')->get();

        $transactions_rented = Transaction::join('users', 'transactions.renter_id', '=', 'users.id')
        ->join('user_items', 'transactions.user_item_id', '=', 'user_items.id')
        ->join('items', 'user_items.item_id', '=', 'items.id')
        ->get([
            'transactions.id',
            'transactions.start_date',
            'transactions.end_date',
            'transactions.status',
            'users.name as user_name',
            'items.name  as item_name'
              ]);
        

        return view('transactions.ongoing', ['transactions_rented' => $transactions_rented]);
        
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
        var_dump("LOL");
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
