<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActValueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('act_value', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->tinyInteger('importance')->comment('重要度');
            $table->tinyInteger('success')->comment('成功');
            $table->text('explanation')->comment('説明');
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
        Schema::dropIfExists('act_value');
    }
}
