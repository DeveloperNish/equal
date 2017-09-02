<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groupuser', function(Blueprint $table){
            $table->increments('id');
            $table->integer('group_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('role');
            $table->boolean('current');
            $table->timestamps();
        });

        Schema::table('groupuser', function(Blueprint $table) {
            $table->foreign('group_id')->references('id')->on('groups');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groupuser');
    }
}
