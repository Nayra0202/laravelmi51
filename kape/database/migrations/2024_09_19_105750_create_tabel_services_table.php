<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tabel_services', function (Blueprint $table) {
           $table->id();
            $table->date('tgl');
            $table->char('nama');
            $table->string('barang');
            $table->string('no_wa');
            $table->string('alamat');
            $table->string('kerusakan');
            $table->string('email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_services');
    }
};
