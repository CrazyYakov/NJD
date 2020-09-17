<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobDescriptionsTable extends Migration
{ 
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_descriptions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');            
            $table->string('slug');
            $table->text('description');
            
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('Role-user-job');

            $table->bigInteger('immediate_manager_id')->unsigned();
            $table->foreign('immediate_manager_id')->references('id')->on('Role-user-job');

            $table->bigInteger('approved_id')->unsigned();
            $table->foreign('approved_id')->references('id')->on('Role-user-job');

            $table->bigInteger('senior_manager_id')->unsigned();
            $table->foreign('senior_manager_id')->references('id')->on('Role-user-job');

            $table->bigInteger('job_id')->unsigned();
            $table->foreign('job_id')->references('id')->on('jobs');

            $table->date('adoption_at');            
            $table->integer('experience');
            $table->string('req_education');
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
        Schema::dropIfExists('job_descriptions');
    }
}
