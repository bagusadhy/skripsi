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
        Schema::table('template', function (Blueprint $table) {
            $table->foreign('jurusan_id', 'fk_template_to_jurusan')
                ->references('id')->on('jurusan')->onDelete('CASCADE')
                ->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('template', function (Blueprint $table) {
            $table->dropForeign('fk_template_to_jurusan');
        });
    }
};
