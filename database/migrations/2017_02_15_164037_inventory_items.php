<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InventoryItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('inventory_items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('supplier');
            $table->integer('invoice_no');
            $table->integer('quantity_bought');
            $table->date('date_bought');
            $table->integer('amount_paid');
            $table->date('expiry_date')->nullable();
            $table->integer('min_stock')->nullable();
            $table->integer('curr_stock')->nullable();
            $table->boolean('restock_needed')->default(false);
            $table->string('description')->nullable();
            $table->index('supplier');
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
