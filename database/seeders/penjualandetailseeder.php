<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Daftar barang yang tersedia
        $barangs = [
            ['barang_id' => 1, 'harga' => 20000], // Barang A
            ['barang_id' => 2, 'harga' => 25000], // Barang B
            ['barang_id' => 3, 'harga' => 22000], // Barang C
            ['barang_id' => 4, 'harga' => 21000], // Barang D
            ['barang_id' => 5, 'harga' => 23000], // Barang E
            ['barang_id' => 6, 'harga' => 24000], // Barang F
            ['barang_id' => 7, 'harga' => 26000], // Barang G
            ['barang_id' => 8, 'harga' => 27000], // Barang H
            ['barang_id' => 9, 'harga' => 28000], // Barang I
            ['barang_id' => 10, 'harga' => 29000], // Barang J
        ];

        // Inisialisasi penjualan id
        $penjualanId = 1;

        // Jumlah entri yang ingin dimasukkan
        $totalEntries = 30;

        // Hitung jumlah entri yang sudah dimasukkan
        $entriesInserted = 0;

        while ($entriesInserted < $totalEntries) {
            // Ambil 3 barang secara acak untuk setiap transaksi penjualan
            $barangSample = array_rand($barangs, 3);
            foreach ($barangSample as $barangIndex) {
                $data = [
                    'penjualan_id' => $penjualanId,
                    'barang_id' => $barangs[$barangIndex]['barang_id'],
                    'harga' => $barangs[$barangIndex]['harga'],
                    'jumlah' => rand(1, 10), // Jumlah barang random antara 1 dan 10
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
                DB::table('t_penjualan_detail')->insert($data);
                $entriesInserted++;
                if ($entriesInserted >= $totalEntries) {
                    break 2;
                }
            }
            $penjualanId++; 
        }
    }
}
