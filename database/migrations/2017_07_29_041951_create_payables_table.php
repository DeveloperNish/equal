<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePayablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payables', function(Blueprint $table){
            $table->increments('id');
            $table->integer('payee_id')->unsigned();
            $table->integer('payer_id')->unsigned();
            $table->decimal('amount','6','2');
            $table->decimal('paid_amount','6','2');
            $table->boolean('cleared');
            $table->timestamps();
        });

         Schema::table('payables', function(Blueprint $table) {
            $table->foreign('payee_id')->references('id')->on('groupuser');
            $table->foreign('payer_id')->references('id')->on('groupuser');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payables');
    }
}
