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
        Schema::create('tdetails', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_transaction')->unsigned();
            $table->string('nama');
            $table->string('kategori');
            $table->integer('jumlah');
            $table->integer('harga');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tdetails');
    }
};
