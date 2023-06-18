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
        Schema::table('mitra', function (Blueprint $table) {
            //
            $table->foreign('user_id', 'fk_mitra_to_users')
                ->references('id')->on('users')->onDelete('CASCADE')
                ->onUpdate('CASCADE');
            $table->foreign('bidang_usaha_id', 'fk_mitra_to_bidang_usaha')
                ->references('id')->on('bidang_usaha')->onDelete('CASCADE')
                ->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mitra', function (Blueprint $table) {
            //
            $table->dropForeign('fk_mitra_to_users');
            $table->dropForeign('fk_mitra_to_bidang_usaha');
        });
    }
};
