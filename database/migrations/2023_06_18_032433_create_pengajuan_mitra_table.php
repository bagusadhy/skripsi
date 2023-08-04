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
        Schema::create('pengajuan_mitra', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id')->nullable()->index('fk_pengajuan_mitra_to_siswa');
            $table->foreignId('bidang_usaha_id')->nullable()->index('fk_pengajuan_mitra_to_bidang_usaha');
            $table->foreignId('periode_id')->nullable()->index('fk_pengajuan_mitra_to_periode_pkl');
            $table->string('nama');
            $table->string('email');
            $table->string('kontak');
            $table->longText('alamat');
            $table->longText('alasan');
            $table->enum('status', [1, 2, 3]);
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
        Schema::dropIfExists('pengajuan_mitra');
    }
};
