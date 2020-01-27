<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuickWinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quick_win', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('project')->nullable()->change();
            $table->string('quick_win');
            $table->tinyInteger('difficulty');
            $table->tinyInteger('impact');
            $table->tinyInteger('total_score');
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
        Schema::dropIfExists('quick_win');
    }
}
