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
        Schema::create('aktivitas_siswa', function (Blueprint $table) {
            $table->id();
             $table->foreignId('siswa_id')->nullable()->index('fk_aktivitas_siswa_to_siswa');
            $table->date('tanggal');
            $table->enum('presensi', [1, 2, 3, 4]);
            $table->longText('jurnal');
            // $table->timestamps();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aktivitas_siswa');
    }
};
