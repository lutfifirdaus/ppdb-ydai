<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalonSiswaSmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calon_siswa_smas', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained()->cascadeOnDelete;
            $table->id();
            $table->char('nisn')->unique();
            $table->string('nama_pd');
            $table->string('ttl');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->enum('agama', ['Islam', 'Kristen', 'Katholik', 'Hindu', 'Buddha', 'Konghucu']);
            $table->string('anak_ke');
            $table->string('status_dalam_keluarga');
            $table->string('alamat_pd');
            $table->string('telp_pd')->unique();
            $table->string('nama_asal_sekolah');
            $table->string('alamat_asal_sekolah');
            $table->year('tahun_ijazah');
            $table->char('nomor_ijazah')->unique();
            $table->year('tahun_skhun');
            $table->char('nomor_skhun')->unique();
            $table->char('nomor_peserta_un')->unique();
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('alamat_ortu');
            $table->char('telp_ortu');
            $table->string('pekerjaan_ayah');
            $table->string('pekerjaan_ibu');
            $table->string('nama_wali')->nullable();
            $table->string('alamat_wali')->nullable();
            $table->string('pekerjaan_wali')->nullable();
            $table->string('foto_pd')->nullable();
            $table->string('scan_ijazah')->nullable();
            $table->string('scan_skhun')->nullable();
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
        Schema::dropIfExists('calon_siswa_smas');
    }
}
