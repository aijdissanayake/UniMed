<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabTechsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labTechs', function (Blueprint $table) {
            $table->integer('labTechID')
                    ->unique()
                    ->unsigned();
            $table->foreign('labTechID')
                    ->references('id')->on('users');
            $table->integer('NIC');
            $table->string('firstName');
            $table->string('lastName');
            $table->integer('age');
            $table->integer('telephoneNo');
            $table->string('homeAddress')->nullable();
            $table->string('labAddress');
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
        Schema::drop('lab_teches');
    }
}
