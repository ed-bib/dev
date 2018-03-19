<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            
            $table->integer('programId');
            $table->bigInteger('ean');
            $table->string('merchantEmail')->unique();
            $table->string('merchantCategory');
            $table->string('manufacturer');
            $table->string('programName');
            $table->string('image');
            $table->string('name');
            $table->float('price');
            $table->float('priceOld');
            $table->float('shippingCosts');
            $table->char('@id', 32);
            $table->char('currency', 5);
            $table->text('description');
            $table->timestamp('modified');
            
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shops');
    }
}

