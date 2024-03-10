<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSlider extends Model
{
    use HasFactory;
    protected $fillable = ["title","subtitle","description","attachment","created_at",'video_url'];
    protected $casts = ["attachment"=>"array"];
}
