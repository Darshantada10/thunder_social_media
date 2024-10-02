<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','post_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
        // this class(like) belong to user class
    }
    public function post()
    {
        return $this->belongsTo(Post::class);
        // this class(like) belong to post class
    }

}
