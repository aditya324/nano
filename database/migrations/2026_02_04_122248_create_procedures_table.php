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
        Schema::create('procedures', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();

            $table->longText('introduction')->nullable();
            $table->longText('what_is')->nullable();

            $table->json('symptoms')->nullable();
            $table->json('causes')->nullable();
            $table->json('condition_risks')->nullable();
            $table->json('preventions')->nullable();
            $table->json('diagnosis_tests')->nullable();

            $table->longText('treatment_overview')->nullable();
            $table->json('surgery_types')->nullable();
            $table->json('recovery_timeline')->nullable();
            $table->json('post_op_care')->nullable();
            $table->json('surgery_risks')->nullable();

            $table->longText('long_term_outlook')->nullable();
            $table->longText('conclusion')->nullable();

            // SEO
            $table->string('seo_title')->nullable();
            $table->text('seo_description')->nullable();
            $table->string('seo_keywords')->nullable();

            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('procedures');
    }
};
