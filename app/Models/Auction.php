<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auction extends Model
{
    use HasFactory;

    protected $casts = [
        'property_type' => 'integer',
    ];

    public function categories()
    {
        return $this->belongsTo(Category::class, 'property_type', 'id');
    }

    public function wishlist()
    {
        return $this->hasMany(Wishlist::class, 'id', 'id');
    }


    public function bank()
    {
        return $this->belongsTo('App\Models\Bank', 'bank_name', 'id');
    }

    public function images()
    {
        return $this->hasMany(AuctionImage::class);
    }
}
