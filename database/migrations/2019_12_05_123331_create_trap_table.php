<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trap', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('trap_trigger')->comment('トリガー');
            $table->text('trap_res')->comment('レスポンス');
            $table->text('trap_avoidance')->comment('回避パターン');
            $table->text('trap_avoidance_sohrt')->comment('回避パターンの短期的な影響');
            $table->text('trap_avoidance_long')->comment('回避パターンの長期的な影響');
            $table->text('trac_trigger')->comment('トリガー');
            $table->text('trac_res')->comment('レスポンス');
            $table->text('trap_coping')->comment('代理コーピング');
            $table->text('trap_coping_short')->comment('代理コーピングの短期的な影響');
            $table->text('trap_coping_long')->comment('代理コーピングの長期的な影響');
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
        Schema::dropIfExists('trap');
    }
}
