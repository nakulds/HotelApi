<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id()->index();
            $table->string('title', 50)->nullable();
            $table->integer('hotel_id')->references('id')->on('hotels')->onDelete('cascade')->index();
            $table->text('description')->nullable();
            $table->enum('rating', [1, 2, 3, 4, 5])->index('rating');
            $table->string('author', 50)->index();
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
        Schema::dropIfExists('hotel_reviews');
    }
}
