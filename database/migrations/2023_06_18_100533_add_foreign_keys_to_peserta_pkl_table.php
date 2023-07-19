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
        Schema::table('peserta_pkl', function (Blueprint $table) {
            //
            $table->foreign('siswa_id', 'fk_peserta_pkl_to_siswa')
                ->references('id')->on('siswa')->onDelete('CASCADE')
                ->onUpdate('CASCADE');
            $table->foreign('lowongan_id', 'fk_peserta_pkl_to_lowongan')
                ->references('id')->on('lowongan')->onDelete('CASCADE')
                ->onUpdate('CASCADE');
            $table->foreign('mitra_id', 'fk_peserta_pkl_to_mitra')
                ->references('id')->on('mitra')->onDelete('CASCADE')
                ->onUpdate('CASCADE');
            $table->foreign('periode_id', 'fk_peserta_pkl_to_periode_pkl')
                ->references('id')->on('periode_pkl')->onDelete('CASCADE')
                ->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('peserta_pkl', function (Blueprint $table) {
            //
            $table->dropForeign('fk_peserta_pkl_to_siswa');
            $table->dropForeign('fk_peserta_pkl_to_lowongan');
            $table->dropForeign('fk_peserta_pkl_to_mitra');
            $table->dropForeign('fk_peserta_pkl_to_periode_pkl');
        });
    }
};
