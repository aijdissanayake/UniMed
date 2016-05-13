<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Inventory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory', function (Blueprint $table) {
            $table->integer('inventoryItemID')
                    ->primary()
                    ->unsigned();
            $table->foreign('inventoryItemID')
                    ->references('inventoryID')->on('inventory_items');
            $table->integer('minStock');
            $table->integer('currStock');
            $table->boolean('restockNeeded')
                    ->default(false);
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
