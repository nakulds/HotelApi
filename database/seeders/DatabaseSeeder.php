<?php

use Database\Seeders\HotelTableSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /**
         * this is comman seeder to call all seeder from this function
         *
         */
        $this->call(HotelTableSeeder::class);
    }
}
