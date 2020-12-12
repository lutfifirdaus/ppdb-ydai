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
            $table->string('ttl');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->enum('agama', ['Islam', 'Kristen', 'Katholik', 'Hindu', 'Buddha', 'Konghucu']);
            $table->string('anak_ke');
            $table->string('status_dalam_keluarga');
            $table->text('alamat_pd');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->text('alamat_ortu');
            $table->char('telp_ortu');
            $table->string('pekerjaan_ayah');
            $table->string('pekerjaan_ibu');
            $table->string('nama_wali')->nullable();
            $table->text('alamat_wali')->nullable();
            $table->string('pekerjaan_wali')->nullable();
            $table->string('foto_pd')->nullable();
            $table->string('scan_akta')->nullable();
            $table->string('scan_kk')->nullable();
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
