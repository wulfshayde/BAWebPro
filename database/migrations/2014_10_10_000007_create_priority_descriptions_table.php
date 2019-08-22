<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePriorityDescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('priority_descriptions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('priority_id');
            $table->unsignedBigInteger('priority_type_id');
            $table->string('description');
            $table->timestamps();

            $table->foreign('priority_id')->references('id')->on('priorities');
            $table->foreign('priority_type_id')->references('id')->on('priority_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('priority_descriptions');
    }
}
