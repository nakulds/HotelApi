<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\HotelResource;
use App\Models\Hotel;

class HotelAPIController extends ParentController
{
    public function getHotel($id)
    {
        $hotel = Hotel::with('reviews')->activeHotel()->find($id);

        if ($hotel) return $this->sendResponse(new HotelResource($hotel), 'Data found');
        else return $this->sendError('Data not found');

    }
}
