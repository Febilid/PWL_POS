<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['user_id' => 1, 'barang_id' => 1, 'stok_jumlah' => 10, 'stok_tanggal' => now()],
            ['user_id' => 1, 'barang_id' => 2, 'stok_jumlah' => 10, 'stok_tanggal' => now()],
            ['user_id' => 1, 'barang_id' => 3, 'stok_jumlah' => 10, 'stok_tanggal' => now()],
            ['user_id' => 1, 'barang_id' => 4, 'stok_jumlah' => 10, 'stok_tanggal' => now()],
            ['user_id' => 1, 'barang_id' => 5, 'stok_jumlah' => 10, 'stok_tanggal' => now()],
            ['user_id' => 2, 'barang_id' => 6, 'stok_jumlah' => 10, 'stok_tanggal' => now()],
            ['user_id' => 2, 'barang_id' => 7, 'stok_jumlah' => 10, 'stok_tanggal' => now()],
            ['user_id' => 2, 'barang_id' => 8, 'stok_jumlah' => 10, 'stok_tanggal' => now()],
            ['user_id' => 2, 'barang_id' => 9, 'stok_jumlah' => 10, 'stok_tanggal' => now()],
            ['user_id' => 2, 'barang_id' => 10, 'stok_jumlah' => 10, 'stok_tanggal' => now()],
        ];
        
        DB::table('t_stok')->insert($data);
    }
}