<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('banner')->nullable();
            $table->string('image')->nullable();
            $table->text('content');
            $table->string('logo')->nullable();
            $table->string('name')->default('');
            $table->string('address')->default('');
            $table->string('email')->default('');
            $table->string('url')->default('');
            $table->string('mobile')->default('');
            $table->string('ewm');
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
        Schema::dropIfExists('companies');
    }
}
