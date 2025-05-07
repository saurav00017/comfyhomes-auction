<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;

class Auction extends Model
{
    use HasFactory;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($auction) {
            $auction->slug = $auction->generateSlug();
        });

        static::updating(function ($auction) {
            if ($auction->isDirty(['property_type_one', 'locality', 'district'])) {
                $auction->slug = $auction->generateSlug();
            }
        });
    }

    public function generateSlug()
    {
        $baseSlug = Str::slug(
            $this->property_type_one . ' in ' . 
            $this->locality . ' ' . 
            $this->district
        );
        
        $randomDigits = mt_rand(1000, 9999); // 4-digit random number
        
        return $baseSlug . '-' . $randomDigits;
        // Example: "luxury-villa-in-malabar-hill-mumbai-4275"
    }

    protected $casts = [
        'property_type' => 'integer',
    ];

    public function categories()
    {
        return $this->belongsTo(Category::class, 'property_type', 'id');
    }

    public function possesion()
    {
        return $this->belongsTo(Pos::class, 'property_type', 'id');
    }

    public function wishlist()
    {
        return $this->hasMany(Wishlist::class);
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
