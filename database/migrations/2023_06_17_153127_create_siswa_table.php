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
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->index('fk_siswa_to_users');
            $table->foreignId('jurusan_id')->nullable()->index('fk_siswa_to_jurusan');
            $table->foreignId('kelas_id')->nullable()->index('fk_siswa_to_kelas');
            $table->foreignId('periode_id')->nullable()->index('fk_siswa_to_periode_pkl');
            $table->string('nisn');
            $table->string('nama');
            $table->enum('jenis_kelamin', [1, 2])->nullable();
            $table->longText('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('agama')->nullable();
            $table->string('kontak')->nullable();
            $table->longText('alamat')->nullable();
            $table->longText('foto')->nullable();
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
        Schema::dropIfExists('siswa');
    }
};
