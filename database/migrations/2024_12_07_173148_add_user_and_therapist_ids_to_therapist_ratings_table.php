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
        Schema::table('therapist_ratings', function (Blueprint $table) {
            //
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Users tablosuna bağlı foreign key
            $table->foreignId('therapist_id')->constrained('therapists')->onDelete('cascade'); // Therapists tablosuna bağlı foreign key


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('therapist_ratings', function (Blueprint $table) {
            //
            $table->dropForeign(['user_id']);
            $table->dropForeign(['therapist_id']);
            $table->dropColumn(['user_id', 'therapist_id']);
        });
    }
};
