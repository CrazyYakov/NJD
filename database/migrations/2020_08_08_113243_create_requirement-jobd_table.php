<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequirementJobdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requirement-jobd', function (Blueprint $table) {
            
            $table->bigInteger('requirement_id')->unsigned();
            $table->foreign('requirement_id')->references('id')->on('requirements');

            $table->bigInteger('jobd_id')->unsigned();
            $table->foreign('jobd_id')->references('id')->on('job_descriptions');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requirement-jobd');
    }
}
