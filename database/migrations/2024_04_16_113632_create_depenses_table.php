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
        Schema::create('depenses', function (Blueprint $table) {
            $table->id();

            // Date for expense
            $table->date('date_depense');

            // Foreign key constraints with cascaded deletes (optional)
            $table->foreignId('id_conducteur')->constrained('conducteurs')->onDelete('cascade');
            $table->foreignId('id_vehicule')->constrained('vehicules')->onDelete('cascade');
            $table->string('type_depense');
            // Use decimal for precise financial calculations
            $table->string('montant_depense');  // Example: Up to 10 digits with 2 decimal places

            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('depenses');
    }
};
