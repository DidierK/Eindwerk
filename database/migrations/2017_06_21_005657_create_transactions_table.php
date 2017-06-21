<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('renter_id')->unsigned();
            $table->foreign('renter_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('owner_id')->unsigned();
            $table->foreign('owner_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('user_item_id')->unsigned();
            $table->foreign('user_item_id')->references('id')->on('user_items')->onDelete('cascade');
            $table->date('start_date'); 
            $table->date('end_date');
            $table->string('status')->default('Wachten op betaling');    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        //
    }
}
