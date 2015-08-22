<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('job_id')->unsigned()->index();

            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('dob');
            $table->string('unique_id');
            $table->string('resume');

            $table->foreign('job_id')->references('id')->on('jobs')->onDelete('cascade');

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
        Schema::drop('applicants');
    }
}
