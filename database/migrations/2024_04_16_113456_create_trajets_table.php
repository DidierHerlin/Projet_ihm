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
        Schema::create('trajets', function (Blueprint $table) {
            $table->id();
            $table->string('ville_depart');  // Taille maximale si applicable
            $table->string('ville_arriver'); // Taille maximale si applicable
            $table->decimal('distance', 10, 2); // Exemple de format décimal
            $table->decimal('montant_trajet', 10, 2); // Exemple de format décimal
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trajets');
    }
};
