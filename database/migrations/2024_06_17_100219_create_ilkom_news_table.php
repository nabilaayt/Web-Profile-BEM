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
        Schema::create('ilkomnews', function (Blueprint $table) {
            $table->id();
            $table->string('judulilkomnews'); // Ensure this is not nullable if it's required
            $table->string('date');
            $table->text('isiilkomnews');
            $table->string('imageilkomnews');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ilkom_news');
    }
};
