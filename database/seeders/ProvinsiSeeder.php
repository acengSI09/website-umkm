<?php

namespace Database\Seeders;

use App\Models\Provinsi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provinsi = [
            [
                'nama' => 'Jawa Barat',
                'ibukota' => 'Bandung',
                'latitude' => -1.596672,
                'longitude' => 103.615799,
            ],
            [
                'nama' => 'Banten',
                'ibukota' => 'Serang',
                'latitude' => -6.943097,
                'longitude' => 107.633545,
            ],
            [
                'nama' => 'Jambi',
                'ibukota' => 'Jambi',
                'latitude' => -8.409518,
                'longitude' => 115.188919,
            ],
            [
                'nama' => 'Riau',
                'ibukota' => 'Batam',
                'latitude' => 0.556174,
                'longitude' => 123.058548,
            ]
        ];

        foreach ($provinsi as $prov) {
            Provinsi::updateOrCreate(['nama' => $prov['nama']], $prov);
        }
    }
}