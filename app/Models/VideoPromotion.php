<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoPromotion extends Model
{
    use HasFactory;

    protected $fillable = ["title","url"];
}
