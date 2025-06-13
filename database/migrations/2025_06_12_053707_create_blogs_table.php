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
        if (!Schema::hasTable('blogs')) {
            Schema::create('blogs', function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->string('summary')->nullable();
                $table->text('description')->nullable();
                $table->text('description_encode')->nullable();
                $table->string('thumbnail_img')->nullable();
                $table->string('feature_img')->nullable();
                $table->string('meta_title')->nullable();
                $table->string('meta_description')->nullable();
                $table->string('meta_key_word')->nullable();
                $table->string('canonical_tag')->nullable();
                $table->string('herf_lang_tag')->nullable();
                $table->string('geo_region')->nullable();
                $table->string('geo_placename')->nullable();
                $table->string('geo_position')->nullable();
                $table->string('icbm')->nullable();
                $table->string('twitter_card')->nullable();
                $table->string('twitter_url')->nullable();
                $table->string('twitter_title')->nullable();
                $table->string('twitter_description')->nullable();
                $table->string('slug')->unique();

                $table->enum('is_featured', ['Checked', 'Unchecked'])->default('Checked');
                $table->enum('status', ['ACTIVE', 'INACTIVE'])->default('ACTIVE');
                $table->enum('indexing', ['index', 'noindex'])->default('index');
                $table->foreign('created_by')->references('id')->on('users')->onDelete('set null');
                $table->foreign('last_updated_by')->references('id')->on('users')->onDelete('set null');
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
        Schema::dropIfExists('blogs');
    }
};
