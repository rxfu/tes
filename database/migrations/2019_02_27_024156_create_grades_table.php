<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->increments('id')->comment('等级ID');
            $table->string('name', 50)->comment('等级名称');
            $table->decimal('lowest', 5, 2)->comment('最低分');
            $table->decimal('highest', 5, 2)->comment('最搞分');

            $table->comment('分数等级表')
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grades');
    }
}
