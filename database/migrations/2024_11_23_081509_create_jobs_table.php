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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('min_salary')->nullable();
            $table->string('max_salary')->nullable();
            $table->string('work_model')->nullable();
            $table->string('type')->nullable();
            $table->string('level')->nullable();
            $table->foreignId('requestment_id')->constrained('requestments');
            $table->foreignId('skill_id')->constrained('skills');
            $table->foreignId('company_id')->constrained('companies')->onDelete('cascade');
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job');
    }
};
