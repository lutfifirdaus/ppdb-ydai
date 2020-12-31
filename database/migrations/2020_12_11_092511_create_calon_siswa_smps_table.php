<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalonSiswaSmpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calon_siswa_smps', function (Blueprint $table) {
            // Data anak
            $table->foreignId('user_id')->constrained()->cascadeOnDelete;
            $table->string('nama_pd');
            $table->char('nisn', 10)->nullable()->unique();
            $table->char('nik', 16)->unique();
            $table->char('no_kk');
            $table->char('no_akta')->unique();
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('kewarganegaraan');
            $table->string('kebutuhan_khusus');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->string('agama');
            $table->string('alamat_pd');
            $table->string('rt', 3);
            $table->string('rw', 3);
            $table->string('dusun');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->char('kode_pos', 5);
            $table->string('lintang');
            $table->string('bujur');
            $table->string('tempat_tinggal');
            $table->string('moda_transportasi');
            $table->string('anak_ke');
            $table->boolean('punya_kip')->default(0);
            $table->boolean('tetap_menerima_kip')->default(0);
            $table->enum('alasan_menolak_pip', ['Dilarang Pemda karena menerima bantuan serupa', 'Menolak', 'Sudah mampu'])->nullable();
            
            // Data ayah
            $table->string('nama_ayah');
            $table->char('nik_ayah', 16);
            $table->year('lahir_ayah');
            $table->string('pendidikan_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('penghasilan_ayah');
            $table->string('kebutuhan_khusus_ayah');
            
             // Data ibu
             $table->string('nama_ibu');
             $table->char('nik_ibu', 16);
             $table->year('lahir_ibu');
             $table->string('pendidikan_ibu');
             $table->string('pekerjaan_ibu');
             $table->string('penghasilan_ibu');
             $table->string('kebutuhan_khusus_ibu');
            
            // Data wali
             $table->string('nama_wali')->nullable();
             $table->char('nik_wali', 16)->nullable();
             $table->year('lahir_wali')->nullable();
             $table->string('pendidikan_wali')->nullable();
             $table->string('pekerjaan_wali')->nullable();
             $table->string('penghasilan_wali')->nullable();

            // Kontak
            $table->char('no_telp_rumah', 11);
            $table->char('no_hp', 15);
            $table->string('email')->unique();

            // Periodik
            $table->char('tinggi', 3);
            $table->char('berat', 3);
            $table->char('lingkar_kepala', 3);
            $table->string('waktu_kesekolah');
            $table->enum('jarak_kesekolah', ['Kurang dari 1 Km', 'Lebih dari 1 Km']);
            $table->char('rincian_jarak', 3)->nullable();
            $table->char('banyak_saudara_kandung', 2);

            // Kesejahteraan
            $table->enum('jenis_kartu', ['PKH','PIP','Kartu Perlindungan Sosial', 'Kartu Keluarga Sejahtera', 'Kartu Kesehatan'])->nullable();
            $table->char('no_kartu', 33)->nullable();
            $table->string('nama_dikartu', 33)->nullable();

            // Registrasi PD
            $table->string('kompetensi_keahlian', 30)->nullable();
            $table->enum('jenis_pendaftaran', ['Siswa baru', 'Pindahan', 'Kembali bersekolah'])->nullable();
            $table->char('nis', 10)->nullable();
            $table->date('tgl_masuk')->nullable();
            $table->string('asal_sekolah')->nullable();
            $table->char('no_un', 20)->nullable();
            $table->char('no_ijazah', 16)->nullable();
            $table->char('no_skhun', 16)->nullable();

            // Dokumen
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
        Schema::dropIfExists('calon_siswa_smps');
    }
}
