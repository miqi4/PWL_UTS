<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('m_user', function (Blueprint $table) {
            $table->dropForeign(['level_id']);
            $table->foreign('level_id')
                ->references('level_id')
                ->on('m_level')
                ->cascadeOnDelete();
        });

        Schema::table('t_stok', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->foreign('user_id')
                ->references('user_id')
                ->on('m_user')
                ->cascadeOnDelete();
        });

        Schema::table('t_penjualan', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->foreign('user_id')
                ->references('user_id')
                ->on('m_user')
                ->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('t_penjualan', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->foreign('user_id')
                ->references('user_id')
                ->on('m_user');
        });

        Schema::table('t_stok', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->foreign('user_id')
                ->references('user_id')
                ->on('m_user');
        });

        Schema::table('m_user', function (Blueprint $table) {
            $table->dropForeign(['level_id']);
            $table->foreign('level_id')
                ->references('level_id')
                ->on('m_level');
        });
    }
};
