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
            $table->foreignId('guru_id')->nullable()->index('fk_peserta_pkl_to_guru')->after('mitra_id');
            $table->foreign('guru_id', 'fk_peserta_to_guru')
            ->references('id')->on('guru')->onDelete('CASCADE')
                ->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('peserta_pkl', function (Blueprint $table) {
            $table->dropForeign('fk_peserta_to_guru');
            $table->dropColumn('guru_id');
        });
    }
};
