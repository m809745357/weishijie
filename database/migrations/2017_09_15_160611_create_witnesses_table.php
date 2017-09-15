<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWitnessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('witnesses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image')->nullable();
            $table->string('video')->nullable();
            $table->string('title')->default('');
            $table->string('desc')->default('');
            $table->text('body');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('witnesses');
    }
}
