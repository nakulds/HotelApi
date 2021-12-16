<?php

namespace App\Models;

use App\Models\Review;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'rating',
        'address',
        'supplier',
        'status',
    ];

    /**
     * Get the reviews for the hotel.
     */
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    /**
     * This is scope to get only active the hotel.
     */
    public function scopeActiveHotel($query)
    {
        return $query->where('status', 'Active');
    }
}
