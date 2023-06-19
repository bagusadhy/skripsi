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
        Schema::table('saran', function (Blueprint $table) {
            //
            $table->foreign('mitra_id', 'fk_saran_to_mitra')
            ->references('id')->on('mitra')->onDelete('CASCADE')
            ->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('saran', function (Blueprint $table) {
            //
            $table->dropForeign('fk_saran_to_mitra');
        });
    }
};
