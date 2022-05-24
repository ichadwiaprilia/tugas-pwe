<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelangganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelanggan', function (Blueprint $table) {
            $table->id();
            $table->string('nm_pel', 255);
            $table->string('no_telp_pel', 16);
            $table->string('almt_pel', 255);
            $table->string('no_rek', 255);
            $table->foreignId('admin_id')->constrained('admin');
            $table->foreignId('kategori_produk_id')->constrained('kategori_produk');
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
        Schema::dropIfExists('pelanggan');
    }
}
