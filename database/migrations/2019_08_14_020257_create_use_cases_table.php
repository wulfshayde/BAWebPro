<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUseCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('use_cases', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('requirement_id');
            $table->unsignedBigInteger('user_story_id');
            $table->unsignedBigInteger('use_case_status_id');
            $table->integer('failed_test_count')->default(0);
            $table->integer('require_retest_count')->default(0);
            $table->timestamps();

            $table->foreign('requirement_id')->references('id')->on('requirements');
            $table->foreign('user_story_id')->references('id')->on('user_stories');
            $table->foreign('use_case_status_id')->references('id')->on('use_case_statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('use_cases');
    }
}
