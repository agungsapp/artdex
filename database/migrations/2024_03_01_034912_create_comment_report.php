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
        Schema::create('comment_report', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('complainant_user_id');
            $table->unsignedBigInteger('reported_user_id');
            $table->unsignedBigInteger('post_id');
            $table->string('complaint');
            $table->string('comment');
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('complainant_user_id')->references('id')->on('users');
            $table->foreign('reported_user_id')->references('id')->on('users');
            $table->foreign('post_id')->references('id')->on('posts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comment_report');
    }
};
