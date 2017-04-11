<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroceryItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grocery_items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('item_name',255);
            $table->decimal('price',10,2);
            $table->string('desc', 255);
            $table->integer('stock');
            $table->integer('merchant_id');
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
        Schema::table('grocery_items', function (Blueprint $table) {
            //
        });
    }
}
