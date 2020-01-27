<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('up', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('goal_setting', 255)->comment('目標の設定');
            $table->string('important')->comment('その目標が重要な理由');
            $table->text('disability')->comment('目標達成の障害');
            $table->text('deal')->comment('障害にどのように対処するのか');
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
        Schema::dropIfExists('up');
    }
}
