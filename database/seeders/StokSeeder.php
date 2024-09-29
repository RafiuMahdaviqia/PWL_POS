<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();

        $stoks = [];
        for ($i = 1; $i <= 15; $i++) {
            $stoks[] = [
                'stok_id' => $i,
                'barang_id' => $i,
                'stok_tanggal' => $now->subDays(rand(1, 30)),
                'stok_jumlah' => rand(10, 100),
                'created_at' => $now,
                'updated_at' => $now
            ];
        }

        DB::table('t_stok')->insert($stoks);
    }
}
