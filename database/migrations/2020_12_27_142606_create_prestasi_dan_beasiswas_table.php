<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestasiDanBeasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestasi_dan_beasiswas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            
            // Prestasi
            $table->enum('jenis_prestasi', ['Sains', 'Seni', 'Olahraga', 'Lain-lain']);
            $table->string('tingkat');
            $table->string('nama_prestasi');
            $table->year('tahun');
            $table->string('penyelenggara');

            // Beasiswa
            $table->enum('jenis_beasiswa', ['Anak berprestasi', 'Anak miskin', 'Pendidikan', 'Unggulan']);
            $table->string('keterangan', 30);
            $table->year('tahun_mulai');
            $table->year('tahun_selesai');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prestasi_dan_beasiswas');
    }
}
