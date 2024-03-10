<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->longText('title');
            $table->longText('ceo_summary');
            $table->string('ceo_picture');
            $table->longText("company_summary");
            $table->longText("extra_text")->nullable();
            $table->string("facebook_url")->nullable();
            $table->string("instagram_url")->nullable();
            $table->string("twitter_url")->nullable();
            $table->string("contact_email")->nullable();
            $table->string("tiktok_url")->nullable();
            $table->string("phone_number")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about');
    }
};
