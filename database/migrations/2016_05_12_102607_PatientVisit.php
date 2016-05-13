<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PatientVisit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patientVisits', function (Blueprint $table) {
            $table->increments('visitID');
            $table->integer('patientID')
                    ->unsigned()
                    ->index();
            $table->foreign('patientID')
                    ->references('patientID')->on('patients');
            $table->string('diagnosis')->nullable();
            $table->string('prognosis')->nullable();
            $table->string('prescDrugs')->nullable();
            $table->date('nextVisitDate')->nullable();
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
