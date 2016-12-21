<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content', function (Blueprint $table) {
            $table->increments('id');
            $table->string('naam');
            $table->string('categorie');
            $table->timestamp('datum1')->nullable();
            $table->timestamp('datum2')->nullable();
            $table->integer('waarborg');
            $table->integer('prijs');
            $table->string('file_name1');
            $table->string('file_name2')->nullable();
            $table->string('file_name3')->nullable();
            $table->integer('user_id');
            $table->string('user_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
