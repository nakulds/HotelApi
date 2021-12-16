<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id()->index();
            $table->string('name', 50)->index();
            $table->text('address');
            $table->enum('supplier', ['Own', 'Hotelbeds','SunHotels'])->index();
            $table->enum('rating', [1, 2, 3, 4, 5])->index();
            $table->enum('status', ['Active', 'Inactive'])->index();
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
        Schema::dropIfExists('hotels');
    }
}
