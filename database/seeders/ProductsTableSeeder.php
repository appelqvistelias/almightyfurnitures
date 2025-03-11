<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            ['name' => 'Luxury Sofa', 'image' => 'luxury_sofa.jpg', 'description' => 'A comfortable and luxurious sofa perfect for any living room.', 'height' => 85, 'width' => 200, 'depth' => 95, 'price' => 25999, 'weight' => 50, 'material' => 'Leather', 'colour' => 'Black', 'brand' => 'FurnitureCo', 'category_id' => 1],
            ['name' => 'Velvet Chesterfield Sofa', 'image' => 'chesterfield_sofa.jpg', 'description' => 'A classic velvet Chesterfield sofa with deep button tufting.', 'height' => 85, 'width' => 220, 'depth' => 90, 'price' => 27999, 'weight' => 60, 'material' => 'Velvet', 'colour' => 'Emerald Green', 'brand' => 'ClassicHome', 'category_id' => 1],
            ['name' => 'Ergonomic Office Chair', 'image' => 'office_chair.jpg', 'description' => 'An ergonomic chair designed to provide comfort during long hours of work.', 'height' => 100, 'width' => 60, 'depth' => 60, 'price' => 8999, 'weight' => 15, 'material' => 'Mesh', 'colour' => 'Grey', 'brand' => 'ComfortPlus', 'category_id' => 2],
            ['name' => 'Leather Recliner', 'image' => 'recliner.jpg', 'description' => 'A comfortable leather recliner, perfect for unwinding after a long day.', 'height' => 110, 'width' => 80, 'depth' => 90, 'price' => 15999, 'weight' => 45, 'material' => 'Leather', 'colour' => 'Dark Brown', 'brand' => 'RelaxHome', 'category_id' => 2],
            ['name' => 'Modern Coffee Table', 'image' => 'coffee_table.jpg', 'description' => 'A sleek and modern coffee table made of glass and steel.', 'height' => 45, 'width' => 120, 'depth' => 60, 'price' => 6999, 'weight' => 15, 'material' => 'Glass, Steel', 'colour' => 'Silver', 'brand' => 'DesignHome', 'category_id' => 3],
            ['name' => 'Round Marble Dining Table', 'image' => 'marble_dining_table.jpg', 'description' => 'A luxurious round marble dining table, perfect for elegant dinners.', 'height' => 75, 'width' => 150, 'depth' => 150, 'price' => 19999, 'weight' => 50, 'material' => 'Marble', 'colour' => 'White', 'brand' => 'LuxuryLiving', 'category_id' => 3],
            ['name' => 'King Size Bed', 'image' => 'king_bed.jpg', 'description' => 'A luxurious king-size bed for ultimate comfort.', 'height' => 50, 'width' => 200, 'depth' => 210, 'price' => 27999, 'weight' => 80, 'material' => 'Wood, Leather', 'colour' => 'Brown', 'brand' => 'SleepWell', 'category_id' => 4],
            ['name' => 'Canopy Bed', 'image' => 'canopy_bed.jpg', 'description' => 'A stunning canopy bed that adds elegance to any bedroom.', 'height' => 220, 'width' => 190, 'depth' => 210, 'price' => 29999, 'weight' => 90, 'material' => 'Wood', 'colour' => 'Dark Oak', 'brand' => 'RoyalSleep', 'category_id' => 4],
            ['name' => 'Industrial Shelf', 'image' => 'industrial_shelf.jpg', 'description' => 'An industrial-style shelf made of metal and wood.', 'height' => 150, 'width' => 90, 'depth' => 40, 'price' => 5999, 'weight' => 20, 'material' => 'Metal, Wood', 'colour' => 'Black', 'brand' => 'UrbanLiving', 'category_id' => 5],
            ['name' => 'Antique Wardrobe', 'image' => 'antique_wardrobe.jpg', 'description' => 'A beautiful antique-style wooden wardrobe.', 'height' => 200, 'width' => 120, 'depth' => 55, 'price' => 24999, 'weight' => 80, 'material' => 'Solid Wood', 'colour' => 'Mahogany', 'brand' => 'VintageElegance', 'category_id' => 5],
            ['name' => 'Executive Office Desk', 'image' => 'executive_desk.jpg', 'description' => 'A high-end executive desk for your home office.', 'height' => 75, 'width' => 160, 'depth' => 80, 'price' => 18999, 'weight' => 70, 'material' => 'Mahogany', 'colour' => 'Dark Brown', 'brand' => 'EliteWork', 'category_id' => 9],
            ['name' => 'Minimalist Wooden Desk', 'image' => 'wooden_desk.jpg', 'description' => 'A simple yet stylish wooden desk.', 'height' => 75, 'width' => 140, 'depth' => 70, 'price' => 12999, 'weight' => 40, 'material' => 'Wood', 'colour' => 'Natural Oak', 'brand' => 'ScandiWork', 'category_id' => 9],
            ['name' => 'Outdoor Lounge Chair', 'image' => 'outdoor_chair.jpg', 'description' => 'An outdoor lounge chair for relaxing in the garden.', 'height' => 70, 'width' => 70, 'depth' => 70, 'price' => 10999, 'weight' => 10, 'material' => 'Metal, Fabric', 'colour' => 'Grey', 'brand' => 'OutdoorLiving', 'category_id' => 10],
            ['name' => 'Patio Dining Set', 'image' => 'patio_set.jpg', 'description' => 'A premium patio dining set for outdoor meals.', 'height' => 75, 'width' => 180, 'depth' => 90, 'price' => 22999, 'weight' => 50, 'material' => 'Teak Wood', 'colour' => 'Brown', 'brand' => 'NatureHome', 'category_id' => 10],
        ]);
    }
}
