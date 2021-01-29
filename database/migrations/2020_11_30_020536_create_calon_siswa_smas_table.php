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
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->char('tahun_ajaran', 9);
            //keterangan pribadi
            $table->string('nama_pd');
            $table->string('nama');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('agama');
            $table->string('kewarganegaraan');
            $table->string('anak_ke');
            $table->string('banyak_saudara_ibu');
            $table->string('banyak_saudara_tiri');
            $table->string('banyak_saudara_angkat');
            $table->string('bahasa');
            //keterangan tempat tinggal
            $table->string('alamat_pd');
            $table->string('kecamatan_pd');
            $table->char('telp_pd', 15);
            $table->enum('tempat_tinggal', ['Orangtua', 'Menampung', 'Asrama']);
            $table->char('jarak_kesekolah', 3);
            $table->string('sarana_kesekolah');
            //keterangan kesehatan
            $table->string('tinggi');
            $table->string('berat');
            $table->enum('golongan_darah', ['A', 'B', 'O', 'AB']);
            $table->string('penyakit')->nullable();
            $table->string('penyakit_selama')->nullable();
            $table->string('kelainan_fisik')->nullable();
            //keterangan pendidikan
            $table->string('asal_sekolah');
            $table->date('tgl_stl');
            $table->char('no_stl');
            $table->date('tgl_ijazah');
            $table->char('no_ijazah');
            $table->string('lama_belajar');
            //keterangan orangtua
            $table->string('nama_ayah');
            $table->string('tempat_lahir_ayah');
            $table->date('tanggal_lahir_ayah');
            $table->string('kewarganegaraan_ayah');
            $table->string('pendidikan_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('alamat_ayah');
            $table->string('gaji_perbulan_ayah');

            $table->string('nama_ibu');
            $table->string('tempat_lahir_ibu');
            $table->date('tanggal_lahir_ibu');
            $table->string('kewarganegaraan_ibu');
            $table->string('pendidikan_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('alamat_ibu');
            $table->string('gaji_perbulan_ibu');

            $table->string('nama_wali')->nullable();
            $table->string('tempat_lahir_wali')->nullable();
            $table->string('tanggal_lahir_wali')->nullable();
            $table->string('kewarganegaraan_wali')->nullable();
            $table->string('pendidikan_wali')->nullable();
            $table->string('pekerjaan_wali')->nullable();
            $table->string('alamat_wali')->nullable();
            $table->string('gaji_perbulan_wali');
            //dokumen
            $table->string('scan_ijazah');
            $table->string('scan_slt');
            $table->string('scan_pernyataan');
            $table->string('foto_pd');
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
