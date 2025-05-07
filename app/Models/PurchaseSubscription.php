<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseSubscription extends Model
{
    use HasFactory;

    public function plan()
    {
        return $this->belongsTo(Subscreption::class); // Assuming you have a Plan model
    }
}
