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
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_fk');
            $table->unsignedInteger('product_fk');
            $table->integer('rating');
            $table->text('comment');
            $table->date('review_date');
            $table->timestamps();

            $table->foreign('user_fk')->references('id')->on('custom_users');
            $table->foreign('product_fk')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
};
