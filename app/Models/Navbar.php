<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Navbar extends Model
{
    use HasFactory;

    protected $fillable = ['title','url','visible','sub_menu'];

    protected $casts = ['visible'=>'boolean','sub_menu'=>'json'];

}
