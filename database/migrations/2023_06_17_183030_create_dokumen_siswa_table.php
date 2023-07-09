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
        Schema::create('dokumen_siswa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id')->nullable()->index('fk_dokumen_siswa_to_siswa');
            $table->longText('surat_pernyataan_siswa')->nullable();
            $table->longText('surat_izin_ortu')->nullable();
            // $table->timestamps();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokumen_siswa');
    }
};
