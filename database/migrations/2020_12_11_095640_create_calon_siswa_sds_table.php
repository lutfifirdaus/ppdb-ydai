<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalonSiswaSdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calon_siswa_sds', function (Blueprint $table) {
            //data registrasi
            $table->string('sekolah_asal', 20);
            $table->string('kecamatan_sekolah_asal', 20);
            $table->year('tahun_ajaran');
            
            //data anak
            $table->foreignId('user_id')->constrained()->cascadeOnUpdate;
            $table->string('nama_pd');
            $table->char('nik', 16)->unique();
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->char('nisn', 10)->unique();
            $table->string('tempat_lahir', 20);
            $table->date('tanggal_lahir');
            $table->char('no_akta')->unique();
            $table->char('anak_ke', 2);
            $table->string('agama', 8);
            $table->string('kewarganegaraan');
            $table->string('kebutuhan_khusus');
            $table->string('alamat_pd');
            $table->string('rt', 3);
            $table->string('rw', 3);
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('kabupaten');
            $table->char('kode_pos', 5);
            $table->string('lintang');
            $table->string('bujur');
            $table->char('telp_rumah')->nullable();
            $table->char('telp_pd', 15);
            $table->string('moda_transportasi');
            $table->string('jenis_tinggal');
            $table->boolean('penerima_kks')->default(0);
            $table->boolean('penerima_kps')->default(0);
            $table->boolean('penerima_kip')->default(0);
            $table->string('no_kks')->unique()->nullable();
            $table->string('no_kps')->unique()->nullable();
            $table->string('no_kip')->unique()->nullable();

            //data periodik
            $table->string('waktu_kesekolah');
            $table->string('jarak_kesekolah');
            $table->char('tinggi', 3);
            $table->char('berat', 3);
            $table->char('bayak_saudara_kandung', 2);
            
            //data orang tua
            $table->string('nama_ayah');
            $table->year('tahun_lahir_ayah');
            $table->string('pendidikan_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('penghasilan_ayah');

            $table->string('nama_ibu');
            $table->year('tahun_lahir_ibu');
            $table->string('pendidikan_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('penghasilan_ibu');

            //data wali
            $table->string('nama_wali')->nullable();
            $table->text('alamat_wali')->nullable();
            $table->string('pendidikan_wali')->nullable();
            $table->string('pekerjaan_wali')->nullable();
            $table->string('penghasilan_wali')->nullable();
            
            //data dokumen
            $table->string('foto_pd');
            $table->string('scan_akta');
            $table->string('scan_kk');
            $table->string('scan_ijazah')->nullable();
            $table->string('scan_kks')->nullable();
            $table->string('scan_kps')->nullable();
            $table->string('scan_kip')->nullable();
            
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
        Schema::dropIfExists('calon_siswa_sds');
    }
}
