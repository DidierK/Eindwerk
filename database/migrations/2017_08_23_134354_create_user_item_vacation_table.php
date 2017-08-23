<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserItemVacationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_item_vacation', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_item_id')->unsigned();
            $table->foreign('user_item_id')->references('id')->on('user_items')->onDelete('cascade');
            $table->integer('vacation_id')->unsigned();
            $table->foreign('vacation_id')->references('id')->on('vacations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_item_vacation');
    }
}
