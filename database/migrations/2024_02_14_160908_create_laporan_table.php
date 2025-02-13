<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan', function (Blueprint $table) {
            $table->id();
            $table->integer('nis')->nullable();
            $table->string('nama_siswa')->nullable();
            $table->string('kategori')->nullable();
            $table->string('lokasi')->nullable();
            $table->string('keterangan')->nullable();
            $table->string('gambar_kejadian')->nullable();
            $table->string('status')->nullable();
            $table->string('feedback')->nullable();
            $table->timestamp('created_at')->default(DB::raw('NOW()'));
            $table->timestamp('updated_at')->default(DB::raw('NOW() ON UPDATE NOW()'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laporan');
    }
};
