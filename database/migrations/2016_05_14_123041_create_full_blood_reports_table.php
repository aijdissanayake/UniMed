<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFullBloodReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('full_blood_report', function (Blueprint $table) {
            $table->increments('refNo');
            $table->integer('patient_id')->index();
            $table->string('name');
            $table->string('leucocytesCount');
            $table->string('lcNeutrophils');
            $table->string('lcLymphocytes');
            $table->string('lcEosinophils');
            $table->string('lcMonocytes');
            $table->string('lcBasophils');
            $table->string('dcNeutrophils');
            $table->string('dcLymphocytes');
            $table->string('dcEosinophils');
            $table->string('dcMonocytes');
            $table->string('dcBasophils');
            $table->string('hb');
            $table->string('hct');
            $table->string('rbc');
            $table->string('mch');
            $table->string('mcv');
            $table->string('mchc');
            $table->string('rdw');
            $table->string('plateletCount');
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
        Schema::create('full_blood_report');
    }
}
