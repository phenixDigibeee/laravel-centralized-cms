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
        if (!Schema::hasTable('blog_category_for_blogs')) {
            Schema::create('blog_category_for_blogs', function (Blueprint $table) {
                $table->id();
                $table->foreignId('blog_id')->constrained()->onDelete('cascade');
                $table->foreignId('blog_category_id')->constrained()->onDelete('cascade');
                $table->unique(['blog_id', 'blog_category_id']); // to prevent duplicates
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_category_for_blogs');
    }
};
