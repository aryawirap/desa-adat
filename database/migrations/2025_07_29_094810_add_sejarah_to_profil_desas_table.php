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
    Schema::table('profil_desas', function (Blueprint $table) {
        // Menambahkan kolom 'sejarah' setelah kolom 'misi'
        $table->text('sejarah')->nullable()->after('misi');
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('profil_desas', function (Blueprint $table) {
            //
        });
    }
};
