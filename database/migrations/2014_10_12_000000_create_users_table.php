<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->comment('用户ID');
            $table->string('username', 128)->unique()->comment('用户名');
            $table->string('password')->comment('密码');
            $table->string('name', 50)->comment('真实姓名');
            $table->string('email')->unique()->nullable()->comment('Email');
            $table->string('telephone', 20)->nullable()->comment('联系电话');
            $table->rememberToken();
            $table->timestamps();

            $table->comment('用户表');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
