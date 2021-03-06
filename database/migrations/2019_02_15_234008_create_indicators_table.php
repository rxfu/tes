<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndicatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indicators', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('指标ID');
            $table->string('name', 50)->comment('指标名称');
            $table->text('description')->nullable()->comment('指标描述');
            $table->unsignedDecimal('score', 5, 2)->nullable()->comment('分值');
            $table->integer('order')->default(0)->comment('排序');
            $table->unsignedBigInteger('parent')->nullable()->comment('父指标ID');
            $table->boolean('is_enable')->default(true)->comment('是否启用');
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
        Schema::dropIfExists('indicators');
    }
}
