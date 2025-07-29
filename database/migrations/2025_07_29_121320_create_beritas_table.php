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
    Schema::create('beritas', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('slug')->unique(); // Untuk URL yang rapi, cth: /berita/gotong-royong-bersama
        $table->text('content');
        $table->string('image')->nullable(); // Menyimpan path ke gambar sampul
        $table->timestamp('published_at')->nullable(); // Kapan berita dipublikasikan
        $table->foreignId('user_id')->constrained('users'); // Siapa yang memposting (dari tabel users)
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beritas');
    }
};
