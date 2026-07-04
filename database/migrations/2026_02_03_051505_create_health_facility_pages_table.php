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
        Schema::create('health_facility_pages', function (Blueprint $table) {
            $table->id();

            // Hero Section
            $table->string('hero_title')->nullable();
            $table->string('hero_button_text')->nullable();
            $table->string('hero_button_link')->nullable();
            $table->string('hero_background')->nullable();

            // About Section
            $table->longText('about_intro')->nullable();
            $table->longText('about_more')->nullable();

            // Main Sections
            $table->longText('overview_content')->nullable();
            $table->longText('workflow_content')->nullable();
            $table->longText('delivery_content')->nullable();
            $table->longText('benefits_content')->nullable();
            $table->longText('risks_content')->nullable();
            $table->longText('advantages_content')->nullable();
            $table->longText('faqs_content')->nullable();

            // SEO
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();

            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('health_facility_pages');
    }
};
