<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabReportTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lab_report_types', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lab_report_id');
            $table->string('lab_report_type');
            $table->string('fee');
        });
        
        }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('lab_reports_types');
    }
}
