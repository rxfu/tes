<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('日志ID');
            $table->unsignedBigInteger('user_id')->comment('用户ID');
            $table->unsignedInteger('ip')->default(0)->comment('IP地址');
            $table->string('level', 10)->comment('级别');
            $table->string('path', 128)->comment('路径');
            $table->string('method', 10)->comment('方法');
            $table->string('action', 10)->comment('动作');
            $table->string('model', 50)->comment('模型');
            $table->string('model_id', 50)->comment('模型ID');
            $table->text('content')->comment('内容');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            
            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logs');
    }
}
