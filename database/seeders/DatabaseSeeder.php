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
                'produk_keterangan' => '
                    <h2>Deskripsi Produk</h2>
                    <p>Aspal Buton PG 70 adalah aspal modifikasi berkualitas tinggi yang dihasilkan dari bahan baku alami dengan kandungan mineral yang kaya. Dikenal karena kinerjanya yang optimal, PG 70 dirancang untuk memberikan daya tahan luar biasa pada berbagai proyek konstruksi jalan, baik itu jalan raya maupun jalan perkotaan.</p>
                    <p>Produk ini tidak hanya tahan terhadap beban lalu lintas yang berat, tetapi juga memiliki ketahanan yang sangat baik terhadap cuaca ekstrem, menjadikannya pilihan ideal untuk semua kondisi.</p>
                    <h2>Keunggulan PG 70</h2>
                    <ul>
                        <li><strong>Ketahanan Tinggi:</strong> Memperpanjang umur jalan dengan mengurangi deformasi dan keretakan.</li>
                        <li><strong>Ramah Lingkungan:</strong> Diproduksi dengan proses yang mempertimbangkan keberlanjutan.</li>
                        <li><strong>Kualitas Terjamin:</strong> Melalui pengujian laboratorium yang ketat.</li>
                        <li><strong>Biaya Efisien:</strong> Mengurangi biaya jangka panjang dengan kebutuhan perawatan yang rendah.</li>
                    </ul>
                    <h2>Kenapa Memilih PG 70?</h2>
                    <p>Dengan Asphalt Buton PG 70, Anda tidak hanya mendapatkan produk berkualitas, tetapi juga solusi cerdas untuk kebutuhan pembangunan yang lebih tahan lama dan efisien. Pilih PG 70 untuk memastikan proyek Anda memiliki daya tahan dan kinerja terbaik, menjadikannya investasi yang tepat untuk masa depan.</p>
                ',
                'produk_judul' => 'Aspal Buton Tipe PG-70',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'produk_nama' => 'PG-76',
                'produk_keterangan' => '
                    <h2>Deskripsi Produk</h2>
                    <p>Aspal Buton PG-76 adalah aspal modifikasi yang cocok untuk digunakan di jalan raya dengan beban berat dan lalu lintas yang padat. Dikenal dengan ketahanannya yang tinggi, PG-76 menawarkan performa optimal di berbagai kondisi cuaca.</p>
                    <p>Produk ini memiliki ketahanan yang lebih baik terhadap suhu tinggi, sehingga mencegah terjadinya rutting (jejak roda) pada jalan raya.</p>
                    <h2>Keunggulan PG 76</h2>
                    <ul>
                        <li><strong>Performa Unggul:</strong> Ideal untuk proyek dengan lalu lintas padat.</li>
                        <li><strong>Ketahanan Suhu:</strong> Mampu bertahan pada suhu tinggi tanpa mengalami kerusakan.</li>
                        <li><strong>Ramah Lingkungan:</strong> Diproduksi dengan proses yang memperhatikan keberlanjutan.</li>
                    </ul>
                    <h2>Kenapa Memilih PG 76?</h2>
                    <p>PG-76 adalah pilihan tepat untuk proyek-proyek yang memerlukan daya tahan tinggi dan performa optimal, memberikan nilai tambah bagi investasi infrastruktur Anda.</p>
                ',
                'produk_judul' => 'Aspal Modifikasi Buton PG-76',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'produk_nama' => 'PG-82',
                'produk_keterangan' => '
                    <h2>Deskripsi Produk</h2>
                    <p>Aspal Buton PG-82 adalah tipe aspal dengan spesifikasi tertinggi yang dirancang untuk kondisi ekstrim. Ideal digunakan di jalan yang sering mengalami suhu ekstrem dan lalu lintas yang sangat berat, PG-82 menawarkan performa optimal dan durabilitas yang sangat tinggi.</p>
                    <h2>Keunggulan PG 82</h2>
                    <ul>
                        <li><strong>Durabilitas Tinggi:</strong> Mampu bertahan dalam kondisi jalan yang paling keras.</li>
                        <li><strong>Stabilitas Suhu:</strong> Menjaga kualitas aspal dalam suhu ekstrem.</li>
                        <li><strong>Performa Luar Biasa:</strong> Menjamin kualitas dan ketahanan untuk proyek besar.</li>
                    </ul>
                    <h2>Kenapa Memilih PG 82?</h2>
                    <p>Dengan PG-82, Anda mendapatkan solusi aspal terbaik untuk kebutuhan konstruksi yang menuntut kualitas dan ketahanan tanpa kompromi. Pilih PG-82 untuk hasil yang maksimal.</p>
                ',
                'produk_judul' => 'Aspal Buton PG-82 Kualitas Ekstrim',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
