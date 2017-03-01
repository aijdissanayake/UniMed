<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessionUnavailablePeriodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('session_unavailablePeriod', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('unavailablePeriod_id');
            $table->integer('session_id');
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
        Schema::drop('session_unavailablePeriod');
    }
}
