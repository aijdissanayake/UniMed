<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->integer('patientID')
                    ->primary()
                    ->unsigned();
            $table->foreign('patientID')
                    ->references('id')->on('users');
            $table->string('firstName');
            $table->string('lastName');
            $table->integer('age');
            $table->string('bloodType');
            $table->string('locale');
            $table->integer('telephoneNo');
            $table->boolean('hasAppointment')->default(false);
            $table->boolean('hasleft')->default(false);
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
        Schema::drop('patients');
    }
}
