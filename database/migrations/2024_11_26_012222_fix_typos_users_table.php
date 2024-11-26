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
        Schema::table('users', function (Blueprint $table) {
            //
            /*$table->renameColumn('before_thearapy_sitution', 'previous_therapy_experience');
            $table->string('problems')->nullable();
            $table->string('therapist_features')->nullable();
            //$table->renameColumn('birthdate','age');
            $table->integer('age')->nullable();*/

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
