<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalonSiswaTksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calon_siswa_tks', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained()->cascadeOnDelete;
            $table->string('nama_pd');
            $table->string('nama');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->string('ttl');
            $table->enum('agama', ['Islam', 'Kristen', 'Katholik', 'Hindu', 'Buddha', 'Konghucu']);
            $table->string('kewarganegaraan');
            $table->string('anak_ke');
            $table->string('banyak_saudara_ibu');
            $table->string('banyak_saudara_tiri');
            $table->string('banyak_saudara_angkat');
            $table->string('bahasa');
            $table->string('berat');
            $table->string('tinggi');
            $table->enum('golongan_darah', ['A', 'B', 'O', 'AB']);
            $table->string('penyakit')->nullable();
            $table->text('alamat_pd');
            $table->char('telp_pd');
            $table->enum('tempat_tinggal', ['Orangtua', 'Menampung', 'Asrama']);
            $table->string('hobi');
            $table->string('nama_ayah');
            $table->string('ttl_ayah');
            $table->enum('agama_ayah', ['Islam', 'Kristen', 'Katholik', 'Hindu', 'Buddha', 'Konghucu']);
            $table->string('kewarganegaraan_ayah');
            $table->string('pendidikan_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('nama_ibu');
            $table->string('ttl_ibu');
            $table->enum('agama_ibu', ['Islam', 'Kristen', 'Katholik', 'Hindu', 'Buddha', 'Konghucu']);
            $table->string('kewarganegaraan_ibu');
            $table->string('pendidikan_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('nama_wali')->nullable();
            $table->string('ttl_wali')->nullable();
            $table->enum('agama_wali', ['Islam', 'Kristen', 'Katholik', 'Hindu', 'Buddha', 'Konghucu'])->nullable();
            $table->string('kewarganegaraan_wali')->nullable();
            $table->string('pendidikan_wali')->nullable();
            $table->string('pekerjaan_wali')->nullable();
            $table->enum('gaji_perbulan', ['1 s/d 5 Juta', '5 s/d 10 Juta', '10 Juta lebih']);
            $table->enum('jemputan', ['mendaftar', 'tidak mendaftar']);
            $table->string('email');
            $table->string('scan_akta');
            $table->string('scan_kk');
            $table->string('scan_ktp_ortu');
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
        Schema::dropIfExists('calon_siswa_tks');
    }
}
