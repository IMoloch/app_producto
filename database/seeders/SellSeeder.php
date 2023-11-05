<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SellSeeder extends Seeder
{
    public function run()
    {
        // Seed product sales
        $sells = [
            [
                'id_Product' => 1, // Use valid product ID from ProductSeeder
                'cant' => 3,
                'precio' => 149.99,
            ],
            [
                'id_Product' => 2, // Use valid product ID from ProductSeeder
                'cant' => 7,
                'precio' => 299.99,
            ],
            [
                'id_Product' => 3, // Use valid product ID from ProductSeeder
                'cant' => 5,
                'precio' => 249.99,
            ],
            [
                'id_Product' => 4, // Use valid product ID from ProductSeeder
                'cant' => 2,
                'precio' => 99.99,
            ],
            [
                'id_Product' => 5, // Use valid product ID from ProductSeeder
                'cant' => 9,
                'precio' => 449.99,
            ],
            [
                'id_Product' => 6, // Use valid product ID from ProductSeeder
                'cant' => 4,
                'precio' => 199.99,
            ],
            [
                'id_Product' => 7, // Use valid product ID from ProductSeeder
                'cant' => 6,
                'precio' => 299.99,
            ],
            [
                'id_Product' => 8, // Use valid product ID from ProductSeeder
                'cant' => 8,
                'precio' => 349.99,
            ],
            [
                'id_Product' => 9, // Use valid product ID from ProductSeeder
                'cant' => 11,
                'precio' => 549.99,
            ],
            [
                'id_Product' => 10, // Use valid product ID from ProductSeeder
                'cant' => 3,
                'precio' => 149.99,
            ],
            [
                'id_Product' => 11, // Use valid product ID from ProductSeeder
                'cant' => 7,
                'precio' => 299.99,
            ],
            [
                'id_Product' => 12, // Use valid product ID from ProductSeeder
                'cant' => 5,
                'precio' => 249.99,
            ],
            [
                'id_Product' => 13, // Use valid product ID from ProductSeeder
                'cant' => 2,
                'precio' => 99.99,
            ],
            [
                'id_Product' => 14, // Use valid product ID from ProductSeeder
                'cant' => 6,
                'precio' => 299.99,
            ],
            [
                'id_Product' => 15, // Use valid product ID from ProductSeeder
                'cant' => 4,
                'precio' => 199.99,
            ],
            [
                'id_Product' => 16, // Use valid product ID from ProductSeeder
                'cant' => 9,
                'precio' => 449.99,
            ],
            [
                'id_Product' => 17, // Use valid product ID from ProductSeeder
                'cant' => 3,
                'precio' => 149.99,
            ],
            [
                'id_Product' => 18, // Use valid product ID from ProductSeeder
                'cant' => 7,
                'precio' => 299.99,
            ],
            [
                'id_Product' => 19, // Use valid product ID from ProductSeeder
                'cant' => 5,
                'precio' => 249.99,
            ],
            [
                'id_Product' => 20, // Use valid product ID from ProductSeeder
                'cant' => 8,
                'precio' => 349.99,
            ],
            // Add more sell data here
        ];

        DB::table('sells')->insert($sells);
    }
}
