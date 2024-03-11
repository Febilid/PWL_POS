<?php

namespace Database\Seeders;

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
            ['user_id' => 1, 'penjualan_kode' => 'PJL001', 'pembeli' => 'Pembeli A', 'penjualan_tanggal' => now()],
            ['user_id' => 1, 'penjualan_kode' => 'PJL002', 'pembeli' => 'Pembeli B', 'penjualan_tanggal' => now()],
            ['user_id' => 1, 'penjualan_kode' => 'PJL003', 'pembeli' => 'Pembeli C', 'penjualan_tanggal' => now()],
            ['user_id' => 1, 'penjualan_kode' => 'PJL004', 'pembeli' => 'Pembeli D', 'penjualan_tanggal' => now()],
            ['user_id' => 1, 'penjualan_kode' => 'PJL005', 'pembeli' => 'Pembeli E', 'penjualan_tanggal' => now()],
            ['user_id' => 2, 'penjualan_kode' => 'PJL006', 'pembeli' => 'Pembeli F', 'penjualan_tanggal' => now()],
            ['user_id' => 2, 'penjualan_kode' => 'PJL007', 'pembeli' => 'Pembeli G', 'penjualan_tanggal' => now()],
            ['user_id' => 2, 'penjualan_kode' => 'PJL008', 'pembeli' => 'Pembeli H', 'penjualan_tanggal' => now()],
            ['user_id' => 2, 'penjualan_kode' => 'PJL009', 'pembeli' => 'Pembeli I', 'penjualan_tanggal' => now()],
            ['user_id' => 2, 'penjualan_kode' => 'PJL010', 'pembeli' => 'Pembeli J', 'penjualan_tanggal' => now()],
        ];
        
        DB::table('t_penjualan')->insert($data);
    }
}