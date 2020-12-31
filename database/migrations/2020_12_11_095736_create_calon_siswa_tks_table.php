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
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
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
            $table->string('alamat_pd');
            $table->string('kecamatan_pd');
            $table->string('kabupaten_pd');
            $table->string('provinsi_pd');
            $table->char('telp_pd', 15);
            $table->enum('tempat_tinggal', ['Orangtua', 'Menampung', 'Asrama']);
            $table->string('hobi');
            $table->string('nama_ayah');
            $table->string('tempat_lahir_ayah');
            $table->date('tanggal_lahir_ayah');
            $table->enum('agama_ayah', ['Islam', 'Kristen', 'Katholik', 'Hindu', 'Buddha', 'Konghucu']);
            $table->string('kewarganegaraan_ayah');
            $table->string('pendidikan_ayah');
            $table->enum('pekerjaan_ayah', ['ABRI', 'Pegawai Negeri', 'Swasta', 'Wirausaha']);
            $table->string('nip_gol_pangkat_ayah')->nullable();
            $table->string('nama_kantor_instansi_ayah')->nullable();
            $table->string('alamat_kantor_no_telp_ayah')->nullable();
            $table->string('nama_ibu');
            $table->string('tempat_lahir_ibu');
            $table->date('tanggal_lahir_ibu');
            $table->enum('agama_ibu', ['Islam', 'Kristen', 'Katholik', 'Hindu', 'Buddha', 'Konghucu']);
            $table->string('kewarganegaraan_ibu');
            $table->string('pendidikan_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('nip_gol_pangkat_ibu')->nullable();
            $table->string('nama_kantor_instansi_ibu')->nullable();
            $table->string('alamat_kantor_no_telp_ibu')->nullable();
            $table->string('nama_wali')->nullable();
            $table->string('tempat_lahir_wali')->nullable();
            $table->string('tanggal_lahir_wali')->nullable();
            $table->enum('agama_wali', ['Islam', 'Kristen', 'Katholik', 'Hindu', 'Buddha', 'Konghucu'])->nullable();
            $table->string('kewarganegaraan_wali')->nullable();
            $table->string('pendidikan_wali')->nullable();
            $table->string('pekerjaan_wali')->nullable();
            $table->string('nip_gol_pangkat_wali')->nullable();
            $table->string('nama_kantor_instansi_wali')->nullable();
            $table->string('alamat_kantor_no_telp_wali')->nullable();
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
