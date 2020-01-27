<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStressDiaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stress_diary', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('stress')->comment('ストレス');
            $table->tinyInteger('happiness')->comment('幸福度');
            $table->string('emotion')->comment('感情');
            $table->tinyInteger('productivity')->comment('生産性');
            $table->string('source_of_stress')->comment('ストレス源');
            $table->string('body_reaction')->comment('身体反応');
            $table->string('response_level')->comment('対処レベル');
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
        Schema::dropIfExists('stress_diary');
    }
}
