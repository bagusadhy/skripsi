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
        Schema::table('pengajuan_mitra', function (Blueprint $table) {
            //
            $table->foreign('siswa_id', 'fk_pengajuan_mitra_to_siswa')
                ->references('id')->on('siswa')->onDelete('CASCADE')
                ->onUpdate('CASCADE');
            $table->foreign('bidang_usaha_id', 'fk_pengajuan_mitra_to_bidang_usaha')
                ->references('id')->on('bidang_usaha')->onDelete('CASCADE')
                ->onUpdate('CASCADE');
            $table->foreign('periode_id', 'fk_pengajuan_mitra_to_periode_pkl')
                ->references('id')->on('periode_pkl')->onDelete('CASCADE')
                ->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pengajuan_mitra', function (Blueprint $table) {
            //
            $table->dropForeign('fk_pengajuan_mitra_to_siswa');
            $table->dropForeign('fk_pengajuan_mitra_to_bidang_usaha');
            $table->dropForeign('fk_pengajuan_mitra_to_periode_pkl');
        });
    }
};
