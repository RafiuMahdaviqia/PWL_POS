<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();

        $barangs = [
            ['barang_id' => 1, 'barang_kode' => 'BRG001', 'barang_nama' => 'Barang 1', 'harga_beli' => 10000, 'harga_jual' => 15000, 'created_at' => $now, 'updated_at' => $now, 'kategori_id' => 1],
            ['barang_id' => 2, 'barang_kode' => 'BRG002', 'barang_nama' => 'Barang 2', 'harga_beli' => 20000, 'harga_jual' => 25000, 'created_at' => $now, 'updated_at' => $now, 'kategori_id' => 1],
            ['barang_id' => 3, 'barang_kode' => 'BRG003', 'barang_nama' => 'Barang 3', 'harga_beli' => 30000, 'harga_jual' => 35000, 'created_at' => $now, 'updated_at' => $now, 'kategori_id' => 1],
            ['barang_id' => 4, 'barang_kode' => 'BRG004', 'barang_nama' => 'Barang 4', 'harga_beli' => 40000, 'harga_jual' => 45000, 'created_at' => $now, 'updated_at' => $now, 'kategori_id' => 1],
            ['barang_id' => 5, 'barang_kode' => 'BRG005', 'barang_nama' => 'Barang 5', 'harga_beli' => 50000, 'harga_jual' => 55000, 'created_at' => $now, 'updated_at' => $now, 'kategori_id' => 1],
            ['barang_id' => 6, 'barang_kode' => 'BRG006', 'barang_nama' => 'Barang 6', 'harga_beli' => 60000, 'harga_jual' => 65000, 'created_at' => $now, 'updated_at' => $now, 'kategori_id' => 2],
            ['barang_id' => 7, 'barang_kode' => 'BRG007', 'barang_nama' => 'Barang 7', 'harga_beli' => 70000, 'harga_jual' => 75000, 'created_at' => $now, 'updated_at' => $now, 'kategori_id' => 2],
            ['barang_id' => 8, 'barang_kode' => 'BRG008', 'barang_nama' => 'Barang 8', 'harga_beli' => 80000, 'harga_jual' => 85000, 'created_at' => $now, 'updated_at' => $now, 'kategori_id' => 2],
            ['barang_id' => 9, 'barang_kode' => 'BRG009', 'barang_nama' => 'Barang 9', 'harga_beli' => 90000, 'harga_jual' => 95000, 'created_at' => $now, 'updated_at' => $now, 'kategori_id' => 2],
            ['barang_id' => 10, 'barang_kode' => 'BRG010', 'barang_nama' => 'Barang 10', 'harga_beli' => 100000, 'harga_jual' => 105000, 'created_at' => $now, 'updated_at' => $now, 'kategori_id' => 2],
            ['barang_id' => 11, 'barang_kode' => 'BRG011', 'barang_nama' => 'Barang 11', 'harga_beli' => 110000, 'harga_jual' => 115000, 'created_at' => $now, 'updated_at' => $now, 'kategori_id' => 3],
            ['barang_id' => 12, 'barang_kode' => 'BRG012', 'barang_nama' => 'Barang 12', 'harga_beli' => 120000, 'harga_jual' => 125000, 'created_at' => $now, 'updated_at' => $now, 'kategori_id' => 3],
            ['barang_id' => 13, 'barang_kode' => 'BRG013', 'barang_nama' => 'Barang 13', 'harga_beli' => 130000, 'harga_jual' => 135000, 'created_at' => $now, 'updated_at' => $now, 'kategori_id' => 3],
            ['barang_id' => 14, 'barang_kode' => 'BRG014', 'barang_nama' => 'Barang 14', 'harga_beli' => 140000, 'harga_jual' => 145000, 'created_at' => $now, 'updated_at' => $now, 'kategori_id' => 3],
            ['barang_id' => 15, 'barang_kode' => 'BRG015', 'barang_nama' => 'Barang 15', 'harga_beli' => 150000, 'harga_jual' => 155000, 'created_at' => $now, 'updated_at' => $now, 'kategori_id' => 3],
        ];

        DB::table('m_barang')->insert($barangs);
    }
}

