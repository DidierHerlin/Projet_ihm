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
        Schema::create('voyages', function (Blueprint $table) {
            $table->id();

            // Date of the voyage
            $table->date('date_voyage');
            $table->string('nombre_voageur');
            // Foreign key constraints with cascaded deletes (optional)
            $table->foreignId('id_conducteur')->constrained('conducteurs')->onDelete('cascade');
            $table->foreignId('id_vehicule')->constrained('vehicules')->onDelete('cascade');
            $table->foreignId('id_trajet')->constrained('trajets')->onDelete('cascade'); // Assuming a numeric ID
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voyages');
    }
};
