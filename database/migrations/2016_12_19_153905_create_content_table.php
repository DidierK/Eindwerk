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
            $table->timestamp('datum1');

            $table->integer('waarborg');
            $table->integer('prijs');
            $table->string('file_name1');
            $table->string('file_name2');
            $table->string('file_name3');
            $table->integer('user_id');
            $table->string('user_name');

            
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
