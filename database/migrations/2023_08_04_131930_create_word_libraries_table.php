<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('word_libraries', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->date('date');
            $table->string('level');
            $table->string('program')->nullable();
            $table->string('banner')->nullable();
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
        Schema::dropIfExists('word_libraries');
    }
};
