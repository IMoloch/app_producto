<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PurchaseSeeder extends Seeder
{
    public function run()
    {
        // Seed purchases
        $purchases = [
            [
                'id_Product' => 1, // Use valid product ID from ProductSeeder
                'cant' => 10,
                'costo' => 599.99,
            ],
            [
                'id_Product' => 2, // Use valid product ID from ProductSeeder
                'cant' => 5,
                'costo' => 249.99,
            ],
            [
                'id_Product' => 3, // Use valid product ID from ProductSeeder
                'cant' => 8,
                'costo' => 199.99,
            ],
            [
                'id_Product' => 4, // Use valid product ID from ProductSeeder
                'cant' => 3,
                'costo' => 149.99,
            ],
            [
                'id_Product' => 5, // Use valid product ID from ProductSeeder
                'cant' => 12,
                'costo' => 699.99,
            ],
            [
                'id_Product' => 6, // Use valid product ID from ProductSeeder
                'cant' => 6,
                'costo' => 349.99,
            ],
            [
                'id_Product' => 7, // Use valid product ID from ProductSeeder
                'cant' => 7,
                'costo' => 299.99,
            ],
            [
                'id_Product' => 8, // Use valid product ID from ProductSeeder
                'cant' => 4,
                'costo' => 199.99,
            ],
            [
                'id_Product' => 9, // Use valid product ID from ProductSeeder
                'cant' => 9,
                'costo' => 449.99,
            ],
            [
                'id_Product' => 10, // Use valid product ID from ProductSeeder
                'cant' => 2,
                'costo' => 99.99,
            ],
            [
                'id_Product' => 11, // Use valid product ID from ProductSeeder
                'cant' => 15,
                'costo' => 899.99,
            ],
            [
                'id_Product' => 12, // Use valid product ID from ProductSeeder
                'cant' => 8,
                'costo' => 349.99,
            ],
            [
                'id_Product' => 13, // Use valid product ID from ProductSeeder
                'cant' => 6,
                'costo' => 299.99,
            ],
            [
                'id_Product' => 14, // Use valid product ID from ProductSeeder
                'cant' => 4,
                'costo' => 199.99,
            ],
            [
                'id_Product' => 15, // Use valid product ID from ProductSeeder
                'cant' => 11,
                'costo' => 549.99,
            ],
            [
                'id_Product' => 16, // Use valid product ID from ProductSeeder
                'cant' => 7,
                'costo' => 349.99,
            ],
            [
                'id_Product' => 17, // Use valid product ID from ProductSeeder
                'cant' => 9,
                'costo' => 449.99,
            ],
            [
                'id_Product' => 18, // Use valid product ID from ProductSeeder
                'cant' => 3,
                'costo' => 149.99,
            ],
            [
                'id_Product' => 19, // Use valid product ID from ProductSeeder
                'cant' => 5,
                'costo' => 249.99,
            ],
            [
                'id_Product' => 20, // Use valid product ID from ProductSeeder
                'cant' => 10,
                'costo' => 499.99,
            ],
            // Add more purchase data here
        ];

        DB::table('purchases')->insert($purchases);
    }
}

