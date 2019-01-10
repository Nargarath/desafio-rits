<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('motivation')->nullable();
            $table->string('linkedin');
            $table->string('github');
            $table->enum('english_level', ['nothing', 'starter','intermediate','advanced','fluent']);
            $table->string('salary_pretension');
            $table->enum('status',['fresh', 'contacted','interviewee','challenge','hired','nothired']);
            $table->integer('job_id')->unsigned();
            $table->foreign('job_id')->references('id')->on('job_vacants');
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
        Schema::dropIfExists('candidates');
    }
}
