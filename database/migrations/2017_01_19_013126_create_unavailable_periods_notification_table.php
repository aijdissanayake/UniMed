<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnavailablePeriodsNotificationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unavailable_periods_cancelled_appointments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('appointment_id');
            $table->integer('patient_id');
            $table->integer('unavailable_period_id');
            $table->string('message');
            $table->boolean('notified');
            $table->boolean('displayed');
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
        Schema::drop('unavailable_periods_cancelled_appointments');
    }
}
