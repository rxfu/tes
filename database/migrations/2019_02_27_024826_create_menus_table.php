<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 20)->comment('菜单项名称');
            $table->string('path', 128)->comment('路径');
            $table->string('icon', 20)->comment('图标');
            $table->unsignedInteger('parent')->nullable()->comment('父级菜单项ID');
            $table->boolean('is_enable')->default(true)->comment('是否启用');
            $table->integer('order')->default(0)->comment('排序');
            $table->text('description')->nullable()>comment('说明');

            $table->comment('菜单表');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus');
    }
}
