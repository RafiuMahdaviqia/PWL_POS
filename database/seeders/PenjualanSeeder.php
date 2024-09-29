<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 1,
                'user_id' => 1, 
                'pembeli' => 'Daus Permana',
                'penjualan_kode' => 'ABC001',
                'penjualan_tanggal' => now(),
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 2,
                'pembeli' => 'Bagas Farel',
                'penjualan_kode' => 'ABC002',
                'penjualan_tanggal' => now(),
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 3, 
                'pembeli' => 'Septian',
                'penjualan_kode' => 'ABC003',
                'penjualan_tanggal' => now(),
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 1,
                'pembeli' => 'Taufiq Putra',
                'penjualan_kode' => 'ABC004',
                'penjualan_tanggal' => now(),
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 2,
                'pembeli' => 'Andi Pratama',
                'penjualan_kode' => 'ABC005',
                'penjualan_tanggal' => now(),
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 3,
                'pembeli' => 'Puti Cantika',
                'penjualan_kode' => 'ABC006',
                'penjualan_tanggal' => now(),
            ],
            [
                'penjualan_id' => 7,
                'user_id' => 1,
                'pembeli' => 'Vionna Putri',
                'penjualan_kode' => 'ABC007',
                'penjualan_tanggal' => now(),
            ],
            [
                'penjualan_id' => 8,
                'user_id' => 2,
                'pembeli' => 'Eca Aulia',
                'penjualan_kode' => 'ABC008',
                'penjualan_tanggal' => now(),
            ],
            [
                'penjualan_id' => 9,
                'user_id' => 3,
                'pembeli' => 'Bella Natasya',
                'penjualan_kode' => 'ABC009',
                'penjualan_tanggal' => now(),
            ],
            [
                'penjualan_id' => 10,
                'user_id' => 1,
                'pembeli' => 'Alya Rosa',
                'penjualan_kode' => 'ABC010',
                'penjualan_tanggal' => now(),
            ],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}