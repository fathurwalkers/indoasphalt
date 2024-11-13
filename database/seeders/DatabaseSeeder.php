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
                    <h2>Product Description</h2>
                    <p>Buton Asphalt PG 70 is a high-quality modified asphalt produced from natural raw materials with a rich mineral content. Known for its optimal performance, PG 70 is designed to provide exceptional durability for various road construction projects, including highways and urban roads.</p>
                    <p>This product is not only resilient under heavy traffic loads but also has excellent resistance to extreme weather, making it an ideal choice for all conditions.</p>
                    <h2>Advantages of PG 70</h2>
                    <ul>
                        <li><strong>High Durability : </strong> Extends road life by reducing deformation and cracking.</li>
                        <li><strong>Eco-Friendly :</strong> Produced with sustainability in mind.</li>
                        <li><strong>Guaranteed Quality :</strong> Undergoes rigorous laboratory testing. </li>
                        <li><strong>Cost-Efficient :</strong> Reduces long-term costs due to minimal maintenance needs.</li>
                    </ul>
                    <h2>Why Choose PG 70?</h2>
                    <p>With Buton Asphalt PG 70, you’re not only getting a high-quality product but also a smart solution for more durable and efficient construction needs. Choose PG 70 to ensure your project has the best durability and performance, making it a solid investment for the future.</p>
                ',
                'produk_judul' => 'Buton Asphalt Type PG-70',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'produk_nama' => 'PG-76',
                'produk_keterangan' => '
                    <h2>Product Description</h2>
                    <p>Buton Asphalt PG-76 is a modified asphalt suitable for use on highways with heavy loads and dense traffic. Known for its high durability, PG-76 offers optimal performance across various weather conditions.</p>
                    <p>This product has superior resistance to high temperatures, preventing rutting (wheel track deformation) on highways. </p>
                    <h2>Advantages of 76</h2>
                    <ul>
                        <li><strong>Superior Performance :</strong> Ideal for projects with heavy traffic. </li>
                        <li><strong>Temperature Resistance :</strong> Withstands high temperatures without damage. </li>
                        <li><strong>Eco-Friendly :</strong> Produced through a sustainable process. </li>
                    </ul>
                    <h2>Why Choose PG 76?</h2>
                    <p>PG-76 is the right choice for projects that require high durability and optimal performance, adding value to your infrastructure investment. </p>
                ',
                'produk_judul' => 'Modified Buton Asphalt Type PG-76',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // [
            //     'produk_nama' => 'PG-82',
            //     'produk_keterangan' => '
            //         <h2>Product Description</h2>
            //         <p>Buton Asphalt PG-82 is a top-spec asphalt type designed for extreme conditions. Ideal for roads exposed to extreme temperatures and heavy traffic, PG-82 offers optimal performance and exceptional durability. </p>
            //         <h2>Advantages of PG 82</h2>
            //         <ul>
            //             <li><strong>High Durability :</strong> Withstands the harshest road conditions. </li>
            //             <li><strong>Temperature Stability :</strong> Maintains asphalt quality under extreme temperatures. </li>
            //             <li><strong>Outstanding Performance :</strong> Ensures quality and resilience for major projects. </li>
            //         </ul>
            //         <h2>Why Choose PG 82?</h2>
            //         <p>With PG-82, you get the best asphalt solution for construction needs that demand uncompromising quality and durability. Choose PG-82 for maximum results. </p>
            //     ',
            //     'produk_judul' => 'Buton Asphalt Type PG-82 Extreme Quality',
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
        ]);
    }
}
