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
        if (!Schema::hasTable('blog_categories')) {
            Schema::create('blog_categories', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('slug');
                $table->enum('status', ['ACTIVE', 'INACTIVE'])->default('INACTIVE');
                $table->enum('indexing', ['index', 'noindex'])->default('index'); // indexing enum
                $table->unsignedBigInteger('application_id'); // foreign key
                $table->foreign('application_id')->references('id')->on('applications')->onDelete('cascade');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_categories');
    }
};
