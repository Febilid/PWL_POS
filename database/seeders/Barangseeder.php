<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['barang_id' => 1, 'barang_kode' => 'BRG001', 'barang_nama' => 'Barang A', 'harga_beli' => 10000, 'harga_jual' => 20000, 'kategori_id' => 1],
            ['barang_id' => 2, 'barang_kode' => 'BRG002', 'barang_nama' => 'Barang B', 'harga_beli' => 15000, 'harga_jual' => 25000, 'kategori_id' => 2],
            ['barang_id' => 3, 'barang_kode' => 'BRG003', 'barang_nama' => 'Barang C', 'harga_beli' => 12000, 'harga_jual' => 22000, 'kategori_id' => 3],
            ['barang_id' => 4, 'barang_kode' => 'BRG004', 'barang_nama' => 'Barang D', 'harga_beli' => 11000, 'harga_jual' => 21000, 'kategori_id' => 4],
            ['barang_id' => 5, 'barang_kode' => 'BRG005', 'barang_nama' => 'Barang E', 'harga_beli' => 13000, 'harga_jual' => 23000, 'kategori_id' => 5],
            ['barang_id' => 6, 'barang_kode' => 'BRG006', 'barang_nama' => 'Barang F', 'harga_beli' => 14000, 'harga_jual' => 24000, 'kategori_id' => 1],
            ['barang_id' => 7, 'barang_kode' => 'BRG007', 'barang_nama' => 'Barang G', 'harga_beli' => 16000, 'harga_jual' => 26000, 'kategori_id' => 2],
            ['barang_id' => 8, 'barang_kode' => 'BRG008', 'barang_nama' => 'Barang H', 'harga_beli' => 17000, 'harga_jual' => 27000, 'kategori_id' => 3],
            ['barang_id' => 9, 'barang_kode' => 'BRG009', 'barang_nama' => 'Barang I', 'harga_beli' => 18000, 'harga_jual' => 28000, 'kategori_id' => 4],
            ['barang_id' => 10, 'barang_kode' => 'BRG010', 'barang_nama' => 'Barang J', 'harga_beli' => 19000, 'harga_jual' => 29000, 'kategori_id' => 5],
        ];
        
        DB::table('m_barang')->insert($data);
    }
}