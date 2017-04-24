<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropCategoryItemName extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
 
        Schema::dropIfExists('category_item_name');
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
