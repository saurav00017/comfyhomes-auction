<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyAmenety extends Model
{
    use HasFactory;


   public function amenety()
{
    return $this->belongsTo('App\Models\Ameneti', 'amenety_id', 'id');
}

}
