<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->integer('biaya');
            $table->string('tipe_pembayaran');
            $table->string('status_transaksi');
            $table->string('bank')->nullable();
            $table->string('nomor_va')->nullable();
            $table->text('pdf_url')->nullable();
            $table->string('pemesanan_id');
            $table->text('transaction_id');
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
        Schema::dropIfExists('transaksis');
    }
};
