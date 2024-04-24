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
        Schema::create('project_technology', function (Blueprint $table) {

            // aggiungo il campo 'project_id' che deve essere una chiave esterna con vincolo
            $table->foreignId('project_id')->constrained()->cascadeOnDelete();

            // stessa cosa per l'aggiunta del campo 'technology_id'
            $table->foreignId('technology_id')->constrained()->cascadeOnDelete();

            // devo comunque specificare quale sia la chiave, avendo una tabella ponte
            // definisco una coppia di chiavi
            $table->primary(['project_id', 'technology_id']);
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_technology');
    }
};
