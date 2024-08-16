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
        Schema::create('recettes', function (Blueprint $table) {
            $table->id();
            $table->date('date_recette');
            $table->decimal('montant_recette', 8, 2); // Change 'string' to 'decimal'
            $table->unsignedBigInteger('conducteur_id'); // Add this line
            $table->unsignedBigInteger('vehicule_id'); // Add this line
            $table->foreign('conducteur_id')->references('id')->on('conducteurs');
            $table->foreign('vehicule_id')->references('id')->on('vehicules');
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recettes');
    }
};
