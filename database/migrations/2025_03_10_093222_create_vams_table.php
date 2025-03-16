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
        Schema::create('vams', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('idCard');
            $table->foreignId('departmans_id')->constrained()->OnDelete('cascade');
            $table->foreignId('supervisors_id')->constrained()->OnDelete('cascade');
            $table->string('price');
            $table->text('description1')->nullable();
            $table->foreignId('category_id')->constrained();
            $table->enum('resone', ['Education', 'Marriage', 'Dowry', 'Medication', 'Accident', 'Insurance', 'Death', 'Other'])->default('Other');
            $table->enum('member', ['No', 'Yes'])->default('No');
            $table->enum('status', ['No', 'Yes'])->default('No');
            $table->enum('validationvams', ['No', 'Yes'])->default('No');
            $table->string('memberDate')->nullable();
            $table->string('memberPrice')->nullable();
            $table->string('debt')->nullable();
            $table->string('lastSalary')->nullable();
            $table->string('maxVam')->nullable();
            $table->string('number')->nullable();
            $table->string('date')->nullable();
            $table->string('description2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vams');
    }
};
