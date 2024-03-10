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
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('section_title');
            $table->text('description')->nullable();
            $table->string('image'); // Column for storing the filename or path of the portfolio item image
            $table->integer('category_id'); // Column for categorizing portfolio items
            $table->string('client')->nullable(); // Column for storing the client's name (nullable)
            $table->string('url')->nullable(); // Column for storing a link to the project (nullable)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};
