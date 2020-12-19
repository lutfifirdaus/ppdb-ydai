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
            $table->foreignId('user_id')->constrained()->cascadeOnDelete;
            $table->char('nik', 16)->unique();
            $table->string('nama_pd');
            $table->string('ttl');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->char('no_akta')->unique();
            $table->char('anak_ke', 2);
            $table->char('bayak_saudara_kandung', 2);
            $table->enum('agama', ['Islam', 'Kristen', 'Katholik', 'Hindu', 'Buddha', 'Konghucu']);
            $table->string('kewarganegaraan');
            $table->string('kebutuhan_khusus')->nullable();
            $table->text('alamat_pd');
            $table->char('telp_rumah', 12)->nullable();
            $table->char('telp_pd', 13);
            $table->string('alat_transport');
            $table->string('waktu_kesekolah');
            $table->string('jarak_kesekolah');
            $table->string('jenis_tinggal');
            $table->char('tinggi', 3);
            $table->char('berat', 3);
            $table->string('no_kks')->nullable();
            $table->string('no_kps')->nullable();
            $table->string('no_kip')->nullable();
            $table->string('nama_asal_sekolah');
            $table->text('alamat_asal_sekolah');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->year('tahun_lahir_ayah');
            $table->year('tahun_lahir_ibu');
            $table->string('pekerjaan_ayah');
            $table->string('pekerjaan_ibu');
            $table->string('pendidikan_ayah');
            $table->string('pendidikan_ibu');
            $table->string('penghasilan_ayah');
            $table->string('penghasilan_ibu');
            $table->string('nama_wali')->nullable();
            $table->text('alamat_wali')->nullable();
            $table->string('pekerjaan_wali')->nullable();
            $table->string('pendidikan_wali')->nullable();
            $table->string('penghasilan_wali')->nullable();
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
