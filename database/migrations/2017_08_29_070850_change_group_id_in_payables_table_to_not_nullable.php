<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeGroupIdInPayablesTableToNotNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('payables', function (Blueprint $table) {
            $table->integer('group_id')->unsigned()->change();
        });    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
            $table->integer('group_id')->unsigned()->nullable()->change();
    }
}
