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
        Schema::create('monitoring', function (Blueprint $table) {
            $table->id();
            $table->foreignId('guru_id')->nullable()->index('fk_monitoring_to_guru');
            $table->foreignId('mitra_id')->nullable()->index('fk_monitoring_to_mitra');
            $table->foreignId('periode_id')->nullable()->index('fk_monitoring_to_periode_pkl');
            $table->longText('topik');
            $table->longText('tujuan');
            $table->longText('permasalahan');
            $table->integer('peserta_pkl');
            $table->longText('deskripsi');
            $table->date('tanggal_pelaksanaan');
            $table->longText('foto');
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
        Schema::dropIfExists('monitoring');
    }
};
