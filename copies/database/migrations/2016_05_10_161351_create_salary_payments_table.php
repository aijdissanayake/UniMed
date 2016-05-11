<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalaryPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salarypayments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('empId')->unsigned();
            $table->foreign('empId')->references('id')->on('employees');
            $table->string('firstName');
            $table->string('lastName');
            $table->decimal('basicSalary',7,2);
            $table->decimal('paidAmount',7,2);
            
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
