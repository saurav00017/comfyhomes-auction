<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auction extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'property_type', 'id');
    }

    public function wishlist()
    {
        return $this->hasMany(Wishlist::class, 'id', 'id');  // Ensure property_id and id are correctly referenced
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
