<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tools', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tool');
            $table->string('description');
            $table->text('technical_description')->nullable();
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('tool_type_id');
            $table->timestamps();

            $table->foreign('tool_type_id')->references('id')->on('tool_types');
            $table->foreign('company_id')->references('id')->on('companies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tools');
    }
}
