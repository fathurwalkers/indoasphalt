<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('produk')->insert([
            [
                'produk_nama' => 'PG-70',
                'produk_keterangan' => 'Aspal Buton PG-70 merupakan jenis aspal dengan tingkat viskositas yang lebih tinggi. Cocok digunakan untuk wilayah dengan iklim panas, serta memiliki ketahanan yang baik terhadap deformasi plastik di bawah beban lalu lintas yang berat.',
                'produk_judul' => 'Aspal Buton Tipe PG-70',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'produk_nama' => 'PG-76',
                'produk_keterangan' => 'Aspal Buton PG-76 adalah aspal modifikasi yang cocok untuk digunakan di jalan raya dengan beban berat dan lalu lintas yang padat. Spesifikasi ini memiliki ketahanan yang lebih baik terhadap suhu tinggi, mencegah terjadinya rutting (jejak roda) pada jalan raya.',
                'produk_judul' => 'Aspal Modifikasi Buton PG-76',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'produk_nama' => 'PG-82',
                'produk_keterangan' => 'Aspal Buton PG-82 adalah tipe aspal dengan spesifikasi tertinggi yang dirancang untuk kondisi ekstrim. Ideal digunakan di jalan yang sering mengalami suhu ekstrem dan lalu lintas sangat berat, menawarkan performa optimal dan durabilitas yang sangat tinggi.',
                'produk_judul' => 'Aspal Buton PG-82 Kualitas Ekstrim',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
