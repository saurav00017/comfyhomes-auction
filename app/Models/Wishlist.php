<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',   // Add this to allow mass assignment
        'property_id',
        // Add any other fields that are allowed for mass assignment
    ];

    // Additional model logic here
}
