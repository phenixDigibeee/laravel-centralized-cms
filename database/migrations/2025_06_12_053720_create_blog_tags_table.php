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
        if (!Schema::hasTable('blog_tags')) {
            Schema::create('blog_tags', function (Blueprint $table) {
                $table->id(); // id: auto-increment primary key
                $table->string('name'); // name
                $table->string('slug')->nullable(); // slug (nullable)
                $table->enum('status', ['ACTIVE', 'INACTIVE'])->default('ACTIVE'); // adjust values as needed
                $table->enum('indexing', ['index', 'noindex'])->default('index'); // adjust values as needed
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
        Schema::dropIfExists('blog_tags');
    }
};
