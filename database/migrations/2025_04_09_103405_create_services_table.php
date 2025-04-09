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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('idCard');
            $table->foreignId('departmans_id')->constrained()->OnDelete('cascade');
            $table->foreignId('supervisors_id')->constrained()->OnDelete('cascade');
            $table->string('price');
            $table->string('description')->nullable();
            $table->enum('status', ['No', 'Yes'])->default('No');
            $table->string('memberDate')->nullable();
            $table->string('memberPrice')->nullable();
            $table->string('debt')->nullable();
            $table->string('lastSalary')->nullable();          
            $table->string('date')->nullable();
            $table->string('description2')->nullable();
            $table->enum('validationHr', ['No', 'Yes'])->default('No');
            $table->enum('validationManager1', ['No', 'Yes'])->default('No');
            $table->enum('validationManager2', ['No', 'Yes'])->default('No');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
