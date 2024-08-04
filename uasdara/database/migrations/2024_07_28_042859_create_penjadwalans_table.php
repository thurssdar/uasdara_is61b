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
        Schema::create('penjadwalans', function (Blueprint $table) {
            $table->id();
            $table->string('kode')->unique();
            $table->bigInteger('mahasiswas_id');
            $table->string('hari');
            $table->date('tanggal');
            $table->bigInteger('matakuliahs_id');
            $table->bigInteger('dosens_id');
            $table->bigInteger('semesters_id');
            $table->bigInteger('tahunajars_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjadwalans');
    }
};
