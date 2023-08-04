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
        Schema::table('siswa', function (Blueprint $table) {
            $table->foreign('user_id', 'fk_siswa_to_users')
                ->references('id')->on('users')->onDelete('CASCADE')
                ->onUpdate('CASCADE');
            $table->foreign('jurusan_id', 'fk_siswa_to_jurusan')
                ->references('id')->on('jurusan')->onDelete('CASCADE')
                ->onUpdate('CASCADE');
            $table->foreign('kelas_id', 'fk_siswa_to_kelas')
                ->references('id')->on('kelas')->onDelete('CASCADE')
                ->onUpdate('CASCADE');
            $table->foreign('periode_id', 'fk_siswa_to_periode_pkl')
                ->references('id')->on('periode_pkl')->onDelete('CASCADE')
                ->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('siswa', function (Blueprint $table) {
            //
            $table->dropForeign('fk_siswa_to_users');
            $table->dropForeign('fk_siswa_to_jurusan');
            $table->dropForeign('fk_siswa_to_kelas');
            $table->dropForeign('fk_siswa_to_periode_pkl');
        });
    }
};
