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
            $table->integer('open_count')->default(0);
            $table->integer('apply_count')->default(0);
            $table->dateTime('expired_at')->nullable(); // Fixed method name
            $table->foreignId('company_id')->constrained('companies')->onDelete('cascade');
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
            $table->softDeletes(); // Use softDeletes for the deleted_at column
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
