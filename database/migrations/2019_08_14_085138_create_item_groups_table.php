<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_groups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_group_id');
            $table->unsignedBigInteger('item_id');
            $table->unsignedBigInteger('item_group_type_id');
            $table->timestamps();

            $table->foreign('user_group_id')->references('id')->on('user_groups');
            $table->foreign('item_id')->references('id')->on('items');
            $table->foreign('item_group_type_id')->references('id')->on('item_group_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_groups');
    }
}
