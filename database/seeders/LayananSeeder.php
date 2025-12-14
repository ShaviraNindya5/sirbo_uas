<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Layanan;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama'     => 'Hotel',
                'kategori' => 'hotel',
                'harga'    => 500000,
            ],
            [
                'nama'     => 'Ruangan Meeting',
                'kategori' => 'ruangan',
                'harga'    => 200000,
            ],
            [
                'nama'     => 'Kendaraan Operasional',
                'kategori' => 'kendaraan',
                'harga'    => 300000,
            ],
            [
                'nama'     => 'Event Hall',
                'kategori' => 'event',
                'harga'    => 750000,
            ],
        ];

        foreach ($data as $item) {
            Layanan::create($item);
        }
    }
}