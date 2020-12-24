<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Review;

class Review extends Model
{
    protected $fillable = ['body'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    Public function Program()
    {
        return $this->belongsTo(Review::class);
    }
}
