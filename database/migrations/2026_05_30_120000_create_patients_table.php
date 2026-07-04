<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('mobile', 15)->unique();
            $table->string('patient_name')->nullable();
            $table->string('uh_id')->nullable();
            $table->string('pre_registration_no')->nullable();
            $table->string('external_id')->nullable();
            $table->string('mr_code')->nullable();
            $table->string('registration_type')->nullable();
            $table->string('source')->nullable();
            $table->json('lookup_response')->nullable();
            $table->json('registration_response')->nullable();
            $table->timestamp('last_verified_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
