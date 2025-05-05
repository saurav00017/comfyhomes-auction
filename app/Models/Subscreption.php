<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscreption extends Model
{
    use HasFactory;

    public function packageDetails()
   {
       return $this->belongsTo('App\Models\PurchaseSubscription','id','plan_id');
   }

}
