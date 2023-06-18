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
        Schema::table('dokumen_siswa', function (Blueprint $table) {
            //
            $table->foreign('siswa_id', 'fk_dokumen_siswa_to_siswa')
            ->references('id')->on('siswa')->onDelete('CASCADE')
            ->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('dokumen_siswa', function (Blueprint $table) {
            //
            $table->dropForeign('fk_dokumen_siswa_to_siswa');
        });
    }
};
