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
        Schema::table('therapists', function (Blueprint $table) {
            //
            $table->string('gender')->nullable();                 // Gender sütunu
            $table->boolean('approved')->default(false);         // Approved sütunu (true/false)
            $table->text('hakkimda')->nullable();                // Hakkımda sütunu
            $table->string('profile_picture')->nullable();       // Profil resmi sütunu
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('therapists', function (Blueprint $table) {
            //
            $table->dropColumn(['gender', 'approved', 'hakkimda', 'profile_picture']);
        });
    }
};
