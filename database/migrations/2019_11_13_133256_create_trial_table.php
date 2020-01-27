<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trial', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('defendant')->comment('被告');
            $table->text('defense')->comment('弁護');
            $table->text('prosecution')->comment('検察');
            $table->text('jury')->comment('陪審');
            $table->text('judgment')->comment('判決');
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
        Schema::dropIfExists('trial');
    }
}
