<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequirementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requirements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tag');
            $table->string('requirement');
            $table->unsignedBigInteger('requirement_type_id');
            $table->unsignedBigInteger('project_id');
            $table->unsignedBigInteger('priority_id');
            $table->timestamps();

            $table->foreign('requirement_type_id')->references('id')->on('requirement_types');
            $table->foreign('project_id')->references('id')->on('projects');
            $table->foreign('priority_id')->references('id')->on('priorities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requirements');
    }
}
