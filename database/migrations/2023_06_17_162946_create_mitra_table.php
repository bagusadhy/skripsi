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
        Schema::create('mitra', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->index('fk_mitra_to_users');
            $table->foreignId('bidang_usaha_id')->nullable()->index('fk_mitra_to_bidang_usaha');
            $table->string('nama');
            $table->string('kontak');
            $table->string('nama_pimpinan')->nullable();
            $table->string('nama_pembimbing')->nullable();
            $table->longText('alamat');
            $table->longText('foto')->nullable();
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
        Schema::dropIfExists('mitra');
    }
};
