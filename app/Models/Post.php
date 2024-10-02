<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['user_id','caption','image','video','music'];

    protected $casts = ['deleted_at'=>'datetime'];

    public function user()
    {
        return $this->belongsTo(User::class);
        // this class(post) belong to user class
    }
    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
