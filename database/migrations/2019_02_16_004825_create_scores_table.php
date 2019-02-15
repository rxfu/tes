<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('year', 4)->comment('年度');
            $table->string('term', 2)->comment('学期');
            $table->string('student', 12)->comment('学号');
            $table->string('course', 12)->comment('课程序号，12位');
            $table->unsignedDecimal('score', 5, 2)->default(0)->comment('评分');
            $table->timestamps();

            $table->comment('评分表');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scores');
    }
}
