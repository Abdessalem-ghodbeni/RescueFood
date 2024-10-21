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
        Schema::table('livraisons', function (Blueprint $table) {
            // Ajouter la relation avec Produit
            $table->foreignId('produit_id')->constrained()->onDelete('cascade');

            // Ajouter le champ état
            $table->enum('etat', ['livrée', 'en attente'])->default('en attente');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('livraisons', function (Blueprint $table) {
            // Supprimer les colonnes ajoutées
            $table->dropForeign(['produit_id']);
            $table->dropColumn('produit_id');
            $table->dropColumn('etat');
        });
    }
};