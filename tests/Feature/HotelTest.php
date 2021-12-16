<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Hotel;

class HotelTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testHotelApi()
    {
        $hotel = Hotel::where('status', "Active")->get()->random(1)->first();
        $response = $this->get('/api/get-hotel-detail/'.$hotel->id);
        $response->assertStatus(200);

        // this route is correct but param is not exists so it is bad request.
        $response = $this->get('/api/get-hotel-detail/#&$');
        $response->assertStatus(404);

        // this route is invalid so return 404
        $response = $this->get('/api/get-hotel-detail');
        $response->assertStatus(404);
    }
}

/**
 * This is the output of HotelAPI test case.
 */
// PHPUnit 9.5.10 by Sebastian Bergmann and contributors.

// .                                                                   1 / 1 (100%)

// Time: 00:02.388, Memory: 22.00 MB

// OK (1 test, 3 assertions)
