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
        Schema::create('staff_departments', function (Blueprint $table) {
            $table->id();
             $table->foreignId('staff_profile_id')
                  ->constrained()
                  ->cascadeOnDelete();

            $table->foreignId('department_id')
                  ->constrained()
                  ->cascadeOnDelete();
            $table->timestamps();

            $table->unique(['staff_profile_id', 'department_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff_departments');
    }
};
