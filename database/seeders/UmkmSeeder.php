<?php

namespace Database\Seeders;

use App\Models\Umkm;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UmkmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $umkm = [
            [
                'nama' => 'Dimsum pertama',
                'modal' => 20000000,
                'pemilik' => 'Mas Sekop',
                'alamat' => 'Jl. Depok No. 23',
                'kabkota_id' => 1,
                'website' => 'www.dimsumpertama.com',
                'email' => 'dimsumpertama@gmail.com',
                'rating' => 5,
                'kategori_id' => 1,
                'pembina_id' => 1,
            ],
            [
                'nama' => 'Baso Mas Pardi',
                'modal' => 33000000,
                'pemilik' => 'Mas Pardi',
                'alamat' => 'Jl. Depok No. 12',
                'kabkota_id' => 4,
                'website' => 'www.basomaspardi.com',
                'email' => 'basomaspardi@gmail.com',
                'rating' => 3,
                'kategori_id' => 2,
                'pembina_id' => 1,
            ],
            [
                'nama' => 'Pentol Hot Poll',
                'modal' => 12000000,
                'pemilik' => 'Marija',
                'alamat' => 'Jl. Bogor No. 21',
                'kabkota_id' => 1,
                'website' => 'www.pentolhotpoll.com',
                'email' => 'pentolhotpoll@gmail.com',
                'rating' => 5,
                'kategori_id' => 3,
                'pembina_id' => 3,
            ],
            [
                'nama' => 'siomay',
                'modal' => 25000000,
                'pemilik' => 'bang ijal',
                'alamat' => 'Jl. Jakarta No. 11',
                'kabkota_id' => 3,
                'website' => 'www.siomay.com',
                'email' => 'siomay@gmail.com',
                'rating' => 5,
                'kategori_id' => 2,
                'pembina_id' => 4,
            ]
        ];

        foreach ($umkm as $um) {
            Umkm::updateOrCreate(['nama' => $um['nama']], $um);
        }
    }
}