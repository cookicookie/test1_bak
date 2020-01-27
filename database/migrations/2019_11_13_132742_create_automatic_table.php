<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutomaticTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('automatic', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('environment')->comment('環境');
            $table->string('thoughts_images')->comment('思考やイメージ');
            $table->string('emotions_mood')->comment('感情や気分');
            $table->string('body_reaction')->comment('身体反応');
            $table->string('action')->comment('行動');
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
        Schema::dropIfExists('automatic');
    }
}
