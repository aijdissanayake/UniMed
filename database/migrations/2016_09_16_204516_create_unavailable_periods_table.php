<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnavailablePeriodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unavailable_periods', function (Blueprint $table) {
            $table->increments('id');
            $table->date('startDate');
            $table->date('endtDate');
            $table->string('message');
            $table->boolean('expired');
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
        Schema::drop('unavailable_periods');
    }
}
