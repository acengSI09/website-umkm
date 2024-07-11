<?php

namespace Database\Seeders;

use App\Models\Pembina;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PembinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pembina = [
            [
                'nama' => 'Caca',
                'gender' => 'P',
                'tgl_lahir' => '2000-07-03',
                'tmp_lahir' => 'Citayem',
                'keahlian' => 'Berjualan',
            ],
            [
                'nama' => 'Aceng',
                'gender' => 'L',
                'tgl_lahir' => '2000-02-01',
                'tmp_lahir' => 'Garut',
                'keahlian' => 'Kitchen Set',
            ],
            [
                'nama' => 'Kamil',
                'gender' => 'L',
                'tgl_lahir' => '2008-04-02',
                'tmp_lahir' => 'Jakarta',
                'keahlian' => 'Membuat kue',
            ],
            [
                'nama' => 'Lilis',
                'gender' => 'P',
                'tgl_lahir' => '2001-12-04',
                'tmp_lahir' => 'Bandung',
                'keahlian' => 'Bisnis online',
            ]
        ];

        foreach ($pembina as $pem) {
            Pembina::updateOrCreate(['nama' => $pem['nama']], $pem);
        }
    }
}