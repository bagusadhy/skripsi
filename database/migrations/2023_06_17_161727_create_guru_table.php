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
        Schema::create('guru', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->index('fk_guru_to_users');
            $table->foreignId('jurusan_id')->nullable()->index('fk_guru_to_jurusan');
            $table->string('nip');
            $table->string('nama');
            $table->enum('jenis_kelamin', [1, 2])->nullable();
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
        Schema::dropIfExists('guru');
    }
};
