<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabtechesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labteches', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('NIC');
            $table->string('firstName');
            $table->string('lastName');
            $table->integer('birthYear');
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
        Schema::drop('labteches');
    }
}
