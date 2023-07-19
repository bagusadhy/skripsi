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
        Schema::create('pendaftar_pkl', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id')->nullable()->index('fk_pendaftar_pkl_to_siswa');
            $table->foreignId('lowongan_id')->nullable()->index('fk_pendaftar_pkl_to_lowongan');
            $table->foreignId('mitra_id')->nullable()->index('fk_pendaftar_pkl_to_mitra');
            $table->enum('status', [0, 1, 2, 3])->default(0);
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
        Schema::dropIfExists('pendaftar_pkl');
    }
};
