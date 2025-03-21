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
        Schema::create('norm_chapters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('norm_id')->constrained('norms')->references('id')->onDelete('cascade')->onUpdate('restrict');
            $table->string('chapter_ref', 100);
            $table->string('chapter_title', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('norm_chapters');
    }
};
