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
        Schema::create('articledepanierd', function (Blueprint $table) {
            $table->id();
            $table->string('image_produit');
            $table->string('panier_id');
            $table->string('produit_id');
            $table->string('quantite');
            $table->string('prix');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articledepanierd');
    }
};
