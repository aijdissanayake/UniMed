<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Income extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incomeReceipts', function (Blueprint $table) {
            $table->increments('receiptID')
                    ->unique();
            $table->integer('incomeType');
            $table->integer('receivedByID');
            $table->decimal('value',9,2);
            $table->string('remarks')->nullable();
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
