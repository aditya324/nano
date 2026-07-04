<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('procedure_faqs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('procedure_id')->constrained()->onDelete('cascade');
            $table->string('question');
            $table->text('answer');
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });

        Schema::create('condition_faqs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('condition_id')->constrained()->onDelete('cascade');
            $table->string('question');
            $table->text('answer');
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('condition_faqs');
        Schema::dropIfExists('procedure_faqs');
    }
};
