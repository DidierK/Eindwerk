<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeleteAndAddColumnsItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('items', function (Blueprint $table) {
            // Delete columns
            $table->dropForeign('items_user_id_foreign');
            $table->dropForeign('items_item_name_id_foreign');
            $table->dropColumn('price', 'created_at', 'updated_at', 'user_id', 'item_name_id');

            // Add columns
            $table->string('name');
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
