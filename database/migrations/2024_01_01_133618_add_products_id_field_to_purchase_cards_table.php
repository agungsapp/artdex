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
        Schema::table('purchase_cards', function (Blueprint $table) {
            $table->integer('products_id')->nullable();            
            $table->string('payment_id')->nullable();   
            $table->string('payment_method')->nullable();
            $table->date('start_date')->nullable();
            $table->date('expired_date')->nullable();
            $table->string('status')->nullable();
            $table->double('price')->nullable();
            $table->integer('users_id');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('purchase_cards', function (Blueprint $table) {
            //
        });
    }
};
