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
        Schema::table('hasil_survey', function (Blueprint $table) {
            //
            $table->foreign('survey_id', 'fk_hasil_survey_to_survey')
                ->references('id')->on('survey')->onDelete('CASCADE')
                ->onUpdate('CASCADE');
            $table->foreign('mitra_id', 'fk_hasil_survey_to_mitra')
                ->references('id')->on('mitra')->onDelete('CASCADE')
                ->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hasil_survey', function (Blueprint $table) {
            //
            $table->dropForeign('fk_hasil_survey_to_survey');
            $table->dropForeign('fk_hasil_survey_to_mitra');
        });
    }
};
