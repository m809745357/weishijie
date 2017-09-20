<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOrderColumnToAllTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tidings', function (Blueprint $table) {
            $table->integer('order')->default(0);
        });
        Schema::table('teachers', function (Blueprint $table) {
            $table->integer('order')->default(0);
        });
        Schema::table('courses', function (Blueprint $table) {
            $table->integer('order')->default(0);
        });
        Schema::table('curricula', function (Blueprint $table) {
            $table->integer('order')->default(0);
        });
        Schema::table('careers', function (Blueprint $table) {
            $table->integer('order')->default(0);
        });
        Schema::table('abouts', function (Blueprint $table) {
            $table->integer('order')->default(0);
        });
        Schema::table('histories', function (Blueprint $table) {
            $table->integer('order')->default(0);
        });
        Schema::table('witnesses', function (Blueprint $table) {
            $table->integer('order')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tidings', function (Blueprint $table) {
            $table->dropColumn('order');
        });
        Schema::table('teachers', function (Blueprint $table) {
            $table->dropColumn('order');
        });
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn('order');
        });
        Schema::table('curricula', function (Blueprint $table) {
            $table->dropColumn('order');
        });
        Schema::table('careers', function (Blueprint $table) {
            $table->dropColumn('order');
        });
        Schema::table('abouts', function (Blueprint $table) {
            $table->dropColumn('order');
        });
        Schema::table('histories', function (Blueprint $table) {
            $table->dropColumn('order');
        });
        Schema::table('witnesses', function (Blueprint $table) {
            $table->dropColumn('order');
        });
    }
}
