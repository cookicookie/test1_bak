<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAngerLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anger_log', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cause_of_anger')->comment('怒りの原因');
            $table->string('reaction')->comment('反応');
            $table->string('judgment_of_reaction')->comment('反応の判断');
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
        Schema::dropIfExists('anger_log');
    }
}
