<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DiseasesPatients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diseases_patients', function (Blueprint $table) {
            $table->integer('patientID')
                    ->primary()
                    ->unsigned();
            $table->foreign('patientID')
                    ->references('patientID')->on('patients');
            $table->integer('disease');
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
