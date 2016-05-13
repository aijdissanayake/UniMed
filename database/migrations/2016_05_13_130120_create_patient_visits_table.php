<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_visits', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patientID');
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
        Schema::drop('patient_visits');
    }
}
