<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Add categories for a furniture store
        DB::table('categories')->insert([
            ['name' => 'Sofas'],
            ['name' => 'Chairs'],
            ['name' => 'Tables'],
            ['name' => 'Beds'],
            ['name' => 'Storage'],
            ['name' => 'Lighting'],
            ['name' => 'Dining Sets'],
            ['name' => 'Curtains and Textiles'],
            ['name' => 'Desks'],
            ['name' => 'Outdoor Furniture'],
            ['name' => 'Kids Furniture'],
            ['name' => 'Decor'],
            ['name' => 'Mirrors & Wall Decor'],
            ['name' => 'Kitchen & Dining'],
            ['name' => 'Office Furniture'],
        ]);
    }
}
