<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssistantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assistants', function (Blueprint $table) {
            $table->integer('assistantID')
                    ->primary()
                    ->unsigned();
            $table->foreign('assistantID')
                    ->references('id')->on('users');
            $table->integer('NIC');
            $table->string('firstName');
            $table->string('lastName');
            $table->decimal('basicSalary',7,2);
            $table->date('employedDate');
            $table->boolean('employed')->default(true);
            $table->date('resignationDate');
            
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
        Schema::drop('assistants');
    }
}
