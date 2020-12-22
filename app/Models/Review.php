<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'body',
    ];
    public function user(){
        return $this->belongsTo(\App\User::class, 'user_id', 'id')->select('id', 'name');
    }
}
