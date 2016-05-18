<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
         * session and app. number added later!
         */
        Schema::create('appointments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patient_id');
            $table->dateTime('aDate');
            $table->boolean('visited');
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
        Schema::drop('appointments');
    }
}
