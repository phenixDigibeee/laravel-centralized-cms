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
        if (!Schema::hasTable('applications')) {
            Schema::create('applications', function (Blueprint $table) {
                $table->id(); // id: auto-increment primary key
                $table->string('application_name')->unique(); // unique application name
                $table->enum('status', ['ACTIVE', 'INACTIVE'])->default('ACTIVE'); // status enum
                $table->string('url')->nullable(); // optional URL
                $table->string('token')->nullable(); // optional token
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
