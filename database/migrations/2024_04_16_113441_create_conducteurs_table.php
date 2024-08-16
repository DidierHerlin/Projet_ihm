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
        Schema::create('conducteurs', function (Blueprint $table) {
            $table->id();
            $table->string('cin', 30)->unique(); // Fix typo: unique() instead of uniquue()
            $table->string('nom_conducteur'); // Fix typo: nom_conducteur instead of nom_conduct
            $table->string('telephone', 25); // Change 'tel_conduct' to a more descriptive name and adjust max length if needed
            $table->string('adresse', 25);
            // Remove unnecessary rememberToken()
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conducteurs');
    }
};
