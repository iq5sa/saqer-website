<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = ["title","facebook_url","twitter_url","instagram_url","tiktok_url","phone_number","ceo_summary","company_summary","contact_email","extra_text","ceo_picture"];
}
