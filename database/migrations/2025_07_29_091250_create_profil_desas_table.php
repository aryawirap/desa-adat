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
    Schema::create('profil_desas', function (Blueprint $table) {
        $table->id();
        $table->text('visi')->nullable(); // Kolom untuk menyimpan visi
        $table->text('misi')->nullable(); // Kolom untuk menyimpan misi
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profil_desas');
    }
};
