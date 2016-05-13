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
        Schema::create('appointments', function (Blueprint $table) {
            $table->increments('id')
                    ->unique();
            $table->integer('user_id')
                    ->unsigned();
            $table->index('user_id');
            $table->foreign('user_id')
                    ->references('patientID')->on('patients')
                    ->onDelete('cascade');
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
