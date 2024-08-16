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
        Schema::create('billets', function (Blueprint $table) {
            $table->id();

            // Foreign key constraints with cascaded deletes (optional)
            $table->foreignId('id_voyageur')->constrained('voyageurs')->onDelete('cascade');
            $table->foreignId('id_voyage')->constrained('voyages')->onDelete('cascade')->name('id_voyage');
            $table->foreignId('id_trajet')->constrained('trajets')->onDelete('cascade');
            // Use appropriate data type for montant_billet based on currency and precision requirements
            $table->decimal('montant_billet', 10, 2); // Example for up to 10 digits with 2 decimal places

            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('billets');
    }
};
