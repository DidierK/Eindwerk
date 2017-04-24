<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropItemNamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('category_item_name', function (Blueprint $table) {
            // Drop constraints
            $table->dropForeign('category_item_name_item_name_id_foreign');
        });

        Schema::dropIfExists('item_names');
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
