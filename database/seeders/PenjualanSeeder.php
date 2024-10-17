<?php

namespace Database\Seeders;

use App\Models\penjualans;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        penjualans::create([
            'bulan' => 'Jan',
            'motor' => 'Honda',
            'area' => 'Jakarta',
            'penjualan' => 12000000,
        ]);

        Penjualans::create([
            'bulan' => 'Feb',
            'motor' => 'Yamaha',
            'area' => 'Jakarta',
            'penjualan' => 11000000,
        ]);

        // Tambahkan data lainnya sesuai struktur yang ada
    }
}
