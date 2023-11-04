<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run()
    {
        // Seed furniture categories
        $categories = [
            ['name' => 'Living Room Furniture'],
            ['name' => 'Bedroom Furniture'],
            ['name' => 'Dining Room Furniture'],
            ['name' => 'Office Furniture'],
            ['name' => 'Outdoor Furniture'],
            ['name' => 'Kids Furniture'],
            ['name' => 'Custom Furniture'],
            ['name' => 'Wooden Furniture'],
            ['name' => 'Metal Furniture'],
            ['name' => 'Leather Furniture'],
            ['name' => 'Vintage Furniture'],
            ['name' => 'Modern Furniture'],
            ['name' => 'Rustic Furniture'],
            ['name' => 'Antique Furniture'],
            ['name' => 'Industrial Furniture'],
            ['name' => 'Art Deco Furniture'],
            ['name' => 'Mid-century Furniture'],
            ['name' => 'Coastal Furniture'],
            ['name' => 'Farmhouse Furniture'],
            ['name' => 'Bohemian Furniture'],
            // Add more furniture categories here
        ];

        DB::table('categories')->insert($categories);
    }
}



