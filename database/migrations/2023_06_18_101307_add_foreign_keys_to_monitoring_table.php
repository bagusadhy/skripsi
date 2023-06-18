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
        Schema::table('monitoring', function (Blueprint $table) {
            //
            $table->foreign('guru_id', 'fk_monitoring_to_guru')
                ->references('id')->on('guru')->onDelete('CASCADE')
                ->onUpdate('CASCADE');
            $table->foreign('mitra_id', 'fk_monitoring_to_mitra')
                ->references('id')->on('mitra')->onDelete('CASCADE')
                ->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('monitoring', function (Blueprint $table) {
            //
            $table->dropForeign('fk_monitoring_to_guru');
            $table->dropForeign('fk_monitoring_to_mitra');
        });
    }
};
