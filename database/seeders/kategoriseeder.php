<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['kategori_kode' => 'KTG001', 'kategori_nama' => 'Elektronik'],
            ['kategori_kode' => 'KTG002', 'kategori_nama' => 'Pakaian'],
            ['kategori_kode' => 'KTG003', 'kategori_nama' => 'Alat Rumah Tangga'],
            ['kategori_kode' => 'KTG004', 'kategori_nama' => 'Otomotif'],
            ['kategori_kode' => 'KTG005', 'kategori_nama' => 'Olahraga'],
        ];
        
        DB::table('m_kategori')->insert($data);
    }
}