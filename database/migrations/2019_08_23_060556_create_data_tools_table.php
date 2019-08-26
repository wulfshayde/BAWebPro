<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataToolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_tools', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('data_id');
            $table->unsignedBigInteger('tool_id');
            $table->timestamps();

            $table->foreign('data_id')->references('id')->on('data');
            $table->foreign('tool_id')->references('id')->on('tools');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_tools');
    }
}
