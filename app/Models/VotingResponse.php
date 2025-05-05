<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VotingResponse extends Model
{
    use HasFactory;

    // Add question_id and answer to fillable
    protected $fillable = ['question_id', 'answer', 'user_id'];
}