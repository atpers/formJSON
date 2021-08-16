<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('anrede');
            $table->string('title');
            $table->string('vorname');
            $table->string('nachname');
            $table->string('suffix');
            $table->string('email');
            $table->date('date');
            $table->json('data');
            $table->integer('age');
            $table->timestamps();

            // $table->unsignedBigInteger('contracts_id')->nullable();
            // $table->date('starting_date');
            // $table->date('ending_date');
            // $table->integer('holidays_cleared')->nullable();
            // $table->time('lunch_break_start');
            // $table->time('lunch_break_end');
            // $table->time('training_time_span_start');
            // $table->time('training_time_span_end');
            // $table->date('last_course_entry')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
