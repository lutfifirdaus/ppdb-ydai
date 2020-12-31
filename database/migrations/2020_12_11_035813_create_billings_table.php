<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billings', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained();
            $table->char('no_registrasi');
            $table->foreign('no_registrasi')->references('no_registrasi')->on('users');
            $table->char('no_billing', 20);
            $table->char('biaya');
            $table->char('kode_bank', 3)->nullable();
            $table->char('channel_bank', 150)->nullable();
            $table->timestamp('tanggal_bayar')->nullable();
            $table->char('status_biling', 1)->nullable();
            $table->char('status_bayar', 1)->nullable();
            $table->char('jenis_pembayaran', 3)->nullable();
            $table->ipAddress('user_create', 150)->nullable();
            $table->ipAddress('user_change', 150)->nullable();
            $table->timestamps();

            $table->primary(['no_registrasi', 'no_billing']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('billings');
    }
}
