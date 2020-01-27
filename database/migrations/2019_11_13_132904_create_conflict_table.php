<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConflictTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conflict', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('act_merit');
            $table->text('act_demerit');
            $table->text('not_act_merit');
            $table->text('not_act_demerit');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conflict');
    }
}
