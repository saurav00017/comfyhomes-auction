<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    public function property_amenety()
   {
         return $this->hasMany('App\Models\PropertyAmenety','property_id','id')->with('amenety');
   }

   public function property_image()
   {
         return $this->hasMany('App\Models\PropertyImage','property_id','id');
   }
}
