<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditColumnToCurriculaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('curricula', function (Blueprint $table) {
            $table->dropColumn('course_id');
            $table->string('teacher');
            $table->string('title')->default('');
            $table->string('image')->nullable();
            $table->string('desc')->default('');
            $table->text('content');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('curricula', function (Blueprint $table) {
            $table->dropColumn(['teacher', 'title', 'image', 'desc', 'content']);
        });
    }
}
