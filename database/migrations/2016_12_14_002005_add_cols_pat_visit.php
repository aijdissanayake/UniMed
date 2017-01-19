<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColsPatVisit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patient_visits', function ($table) {
            $table->string('complaints')->nullable();
            $table->string('cFindings')->nullable();
            $table->string('investigations')->nullable();
            $table->decimal('weight', 6, 3)->nullable();

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
