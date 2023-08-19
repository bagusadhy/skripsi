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
        Schema::create('lowongan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mitra_id')->nullable()->index('fk_lowongan_to_mitra');
            $table->foreignId('jurusan_id')->nullable()->index('fk_lowongan_to_jurusan');
            $table->foreignId('periode_id')->nullable()->index('fk_lowongan_to_periode_pkl');
            $table->longText('nama');
            $table->integer('kuota');
            $table->enum('status', [0, 1])->default(1);
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
        Schema::dropIfExists('lowongan');
    }
};
