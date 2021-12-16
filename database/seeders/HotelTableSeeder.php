<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Hotel;
use App\Models\HotelReview;

class HotelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hotel::factory()->count(30)->hasReviews(rand(1,10))->create();
    }
}
