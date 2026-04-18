<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('m_barang', function (Blueprint $table) {
            $table->dropForeign(['kategori_id']);
            $table->foreign('kategori_id')
                ->references('kategori_id')
                ->on('m_kategori')
                ->cascadeOnDelete();
        });

        Schema::table('t_stok', function (Blueprint $table) {
            $table->dropForeign(['barang_id']);
            $table->foreign('barang_id')
                ->references('barang_id')
                ->on('m_barang')
                ->cascadeOnDelete();
        });

        Schema::table('t_penjualan_detail', function (Blueprint $table) {
            $table->dropForeign(['barang_id']);
            $table->foreign('barang_id')
                ->references('barang_id')
                ->on('m_barang')
                ->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('t_penjualan_detail', function (Blueprint $table) {
            $table->dropForeign(['barang_id']);
            $table->foreign('barang_id')
                ->references('barang_id')
                ->on('m_barang');
        });

        Schema::table('t_stok', function (Blueprint $table) {
            $table->dropForeign(['barang_id']);
            $table->foreign('barang_id')
                ->references('barang_id')
                ->on('m_barang');
        });

        Schema::table('m_barang', function (Blueprint $table) {
            $table->dropForeign(['kategori_id']);
            $table->foreign('kategori_id')
                ->references('kategori_id')
                ->on('m_kategori');
        });
    }
};
