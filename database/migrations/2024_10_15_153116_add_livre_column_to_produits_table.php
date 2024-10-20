<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLivreColumnToProduitsTable extends Migration
{
    public function up()
    {
        Schema::table('produits', function (Blueprint $table) {
            // Ajouter une nouvelle colonne 'livre'
            $table->boolean('livre')->default(false);
            $table->date('date_expiration')->nullable(); 
        });
    }

    public function down()
    {
        Schema::table('produits', function (Blueprint $table) {
            // Supprimer la colonne 'livre'
            $table->dropColumn('livre');
            $table->dropColumn('date_expiration');
        });
    }
}
