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
        Schema::table('guru', function (Blueprint $table) {
            //
            $table->foreign('user_id', 'fk_guru_to_users')
                ->references('id')->on('users')->onDelete('CASCADE')
                ->onUpdate('CASCADE');
            $table->foreign('jurusan_id', 'fk_guru_to_jurusan')
                ->references('id')->on('jurusan')->onDelete('CASCADE')
                ->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('guru', function (Blueprint $table) {
            //
            $table->dropForeign('fk_guru_to_users');
            $table->dropForeign('fk_guru_to_jurusan');
        });
    }
};
