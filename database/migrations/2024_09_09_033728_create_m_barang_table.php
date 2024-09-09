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
        if (!Schema::hasTable('m_barang')) {    
            Schema::create('m_barang', function (Blueprint $table) {
                $table->id('barang_id');
                $table->string('barang_kode', 10)->unique();
                $table->string('barang_nama', 100);
                $table->decimal('harga_beli', 19, 4);
                $table->decimal('harga_jual', 19, 4);
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('m_barang', function (Blueprint $table) {
            //
        });
    }
};
