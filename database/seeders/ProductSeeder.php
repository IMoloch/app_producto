<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run()
    {
        // Seed products
        $products = [
            [
                'name' => 'Sofa Set',
                'descripcion' => 'Elegant sofa set for your living room',
                'stock' => 50.00,
                'medida' => 'Unit',
                'price' => 799.99,
                'qrCode' => 'QRCode-1',
                'id_Category' => 1, // Use valid category ID from CategorySeeder
            ],
            [
                'name' => 'Queen Bed',
                'descripcion' => 'Comfortable queen-size bed for your bedroom',
                'stock' => 25.00,
                'medida' => 'Unit',
                'price' => 499.99,
                'qrCode' => 'QRCode-2',
                'id_Category' => 2, // Use valid category ID from CategorySeeder
            ],
            [
                'name' => 'Dining Table',
                'descripcion' => 'Stylish dining table for your dining room',
                'stock' => 30.00,
                'medida' => 'Unit',
                'price' => 349.99,
                'qrCode' => 'QRCode-3',
                'id_Category' => 3, // Use valid category ID from CategorySeeder
            ],
            [
                'name' => 'Office Desk',
                'descripcion' => 'Functional office desk for your workspace',
                'stock' => 20.00,
                'medida' => 'Unit',
                'price' => 249.99,
                'qrCode' => 'QRCode-4',
                'id_Category' => 4, // Use valid category ID from CategorySeeder
            ],
            [
                'name' => 'Outdoor Patio Set',
                'descripcion' => 'Outdoor furniture set for your patio',
                'stock' => 35.00,
                'medida' => 'Unit',
                'price' => 599.99,
                'qrCode' => 'QRCode-5',
                'id_Category' => 5, // Use valid category ID from CategorySeeder
            ],
            [
                'name' => 'Kids Bunk Bed',
                'descripcion' => 'Fun bunk bed for your children',
                'stock' => 15.00,
                'medida' => 'Unit',
                'price' => 349.99,
                'qrCode' => 'QRCode-6',
                'id_Category' => 6, // Use valid category ID from CategorySeeder
            ],
            [
                'name' => 'Custom Wardrobe',
                'descripcion' => 'Customizable wardrobe for your bedroom',
                'stock' => 10.00,
                'medida' => 'Unit',
                'price' => 799.99,
                'qrCode' => 'QRCode-7',
                'id_Category' => 7, // Use valid category ID from CategorySeeder
            ],
            [
                'name' => 'Wooden Coffee Table',
                'descripcion' => 'Rustic wooden coffee table for your living room',
                'stock' => 40.00,
                'medida' => 'Unit',
                'price' => 149.99,
                'qrCode' => 'QRCode-8',
                'id_Category' => 8, // Use valid category ID from CategorySeeder
            ],
            [
                'name' => 'Metal Dining Chairs',
                'descripcion' => 'Set of metal dining chairs for your dining room',
                'stock' => 50.00,
                'medida' => 'Unit',
                'price' => 199.99,
                'qrCode' => 'QRCode-9',
                'id_Category' => 9, // Use valid category ID from CategorySeeder
            ],
            [
                'name' => 'Leather Recliner',
                'descripcion' => 'Luxurious leather recliner for your living room',
                'stock' => 30.00,
                'medida' => 'Unit',
                'price' => 499.99,
                'qrCode' => 'QRCode-10',
                'id_Category' => 10, // Use valid category ID from CategorySeeder
            ],
            [
                'name' => 'Vintage Dresser',
                'descripcion' => 'Vintage-style dresser for your bedroom',
                'stock' => 20.00,
                'medida' => 'Unit',
                'price' => 249.99,
                'qrCode' => 'QRCode-11',
                'id_Category' => 11, // Use valid category ID from CategorySeeder
            ],
            [
                'name' => 'Modern Sectional Sofa',
                'descripcion' => 'Contemporary sectional sofa for your living room',
                'stock' => 40.00,
                'medida' => 'Unit',
                'price' => 899.99,
                'qrCode' => 'QRCode-12',
                'id_Category' => 12, // Use valid category ID from CategorySeeder
            ],
            [
                'name' => 'Rustic Coffee Table',
                'descripcion' => 'Rustic coffee table for your living room',
                'stock' => 35.00,
                'medida' => 'Unit',
                'price' => 179.99,
                'qrCode' => 'QRCode-13',
                'id_Category' => 13, // Use valid category ID from CategorySeeder
            ],
            [
                'name' => 'Antique Sideboard',
                'descripcion' => 'Antique-style sideboard for your dining room',
                'stock' => 15.00,
                'medida' => 'Unit',
                'price' => 329.99,
                'qrCode' => 'QRCode-14',
                'id_Category' => 14, // Use valid category ID from CategorySeeder
            ],
            [
                'name' => 'Industrial Bookshelf',
                'descripcion' => 'Industrial-style bookshelf for your office',
                'stock' => 25.00,
                'medida' => 'Unit',
                'price' => 299.99,
                'qrCode' => 'QRCode-15',
                'id_Category' => 15, // Use valid category ID from CategorySeeder
            ],
            [
                'name' => 'Art Deco Mirror',
                'descripcion' => 'Art Deco-style mirror for your home',
                'stock' => 30.00,
                'medida' => 'Unit',
                'price' => 99.99,
                'qrCode' => 'QRCode-16',
                'id_Category' => 16, // Use valid category ID from CategorySeeder
            ],
            [
                'name' => 'Mid-century Armchair',
                'descripcion' => 'Mid-century modern armchair for your living room',
                'stock' => 20.00,
                'medida' => 'Unit',
                'price' => 249.99,
                'qrCode' => 'QRCode-17',
                'id_Category' => 17, // Use valid category ID from CategorySeeder
            ],
            [
                'name' => 'Coastal Bed Frame',
                'descripcion' => 'Coastal-style bed frame for your bedroom',
                'stock' => 25.00,
                'medida' => 'Unit',
                'price' => 399.99,
                'qrCode' => 'QRCode-18',
                'id_Category' => 18, // Use valid category ID from CategorySeeder
            ],
            [
                'name' => 'Farmhouse Dining Set',
                'descripcion' => 'Farmhouse-style dining set for your dining room',
                'stock' => 30.00,
                'medida' => 'Unit',
                'price' => 499.99,
                'qrCode' => 'QRCode-19',
                'id_Category' => 19, // Use valid category ID from CategorySeeder
            ],
            [
                'name' => 'Bohemian Ottoman',
                'descripcion' => 'Bohemian-style ottoman for your living room',
                'stock' => 15.00,
                'medida' => 'Unit',
                'price' => 99.99,
                'qrCode' => 'QRCode-20',
                'id_Category' => 20, // Use valid category ID from CategorySeeder
            ],
            // Add more product data here
        ];

        DB::table('products')->insert($products);
    }
}

