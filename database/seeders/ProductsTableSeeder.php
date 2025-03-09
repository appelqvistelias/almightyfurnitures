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
            ['name' => 'Luxury Sofa', 'image' => 'sofa.jpg', 'description' => 'A comfortable and luxurious sofa perfect for any living room.', 'height' => 85, 'width' => 200, 'depth' => 95, 'price' => 1999.99, 'weight' => 50, 'material' => 'Leather', 'colour' => 'Black', 'brand' => 'FurnitureCo', 'category_id' => 1],
            ['name' => 'Modern Coffee Table', 'image' => 'coffee_table.jpg', 'description' => 'A sleek and modern coffee table made of glass and steel.', 'height' => 45, 'width' => 120, 'depth' => 60, 'price' => 299.99, 'weight' => 15, 'material' => 'Glass, Steel', 'colour' => 'Silver', 'brand' => 'DesignHome', 'category_id' => 2],
            ['name' => 'Ergonomic Office Chair', 'image' => 'office_chair.jpg', 'description' => 'An ergonomic chair designed to provide comfort during long hours of work.', 'height' => 100, 'width' => 60, 'depth' => 60, 'price' => 299.99, 'weight' => 15, 'material' => 'Mesh', 'colour' => 'Grey', 'brand' => 'ComfortPlus', 'category_id' => 3],
            ['name' => 'Wooden Dining Table', 'image' => 'dining_table.jpg', 'description' => 'A spacious dining table made of solid wood, perfect for family gatherings.', 'height' => 75, 'width' => 180, 'depth' => 90, 'price' => 899.99, 'weight' => 30, 'material' => 'Wood', 'colour' => 'Oak', 'brand' => 'HomeMakers', 'category_id' => 2],
            ['name' => 'King Size Bed', 'image' => 'king_bed.jpg', 'description' => 'A luxurious king-size bed for ultimate comfort.', 'height' => 50, 'width' => 200, 'depth' => 210, 'price' => 1499.99, 'weight' => 80, 'material' => 'Wood, Leather', 'colour' => 'Brown', 'brand' => 'SleepWell', 'category_id' => 4],
            ['name' => 'Industrial Shelf', 'image' => 'industrial_shelf.jpg', 'description' => 'An industrial style shelf made of metal and wood, perfect for any modern home.', 'height' => 150, 'width' => 90, 'depth' => 40, 'price' => 249.99, 'weight' => 20, 'material' => 'Metal, Wood', 'colour' => 'Black', 'brand' => 'UrbanLiving', 'category_id' => 5],
            ['name' => 'Leather Recliner', 'image' => 'recliner.jpg', 'description' => 'A comfortable leather recliner, perfect for unwinding after a long day.', 'height' => 110, 'width' => 80, 'depth' => 90, 'price' => 799.99, 'weight' => 45, 'material' => 'Leather', 'colour' => 'Dark Brown', 'brand' => 'RelaxHome', 'category_id' => 1],
            ['name' => 'Round Dining Table', 'image' => 'round_table.jpg', 'description' => 'A beautiful round dining table, great for small spaces.', 'height' => 75, 'width' => 120, 'depth' => 120, 'price' => 599.99, 'weight' => 25, 'material' => 'Wood', 'colour' => 'White', 'brand' => 'CozyLiving', 'category_id' => 2],
            ['name' => 'Office Desk', 'image' => 'office_desk.jpg', 'description' => 'A modern office desk with plenty of storage for your office essentials.', 'height' => 75, 'width' => 140, 'depth' => 70, 'price' => 349.99, 'weight' => 40, 'material' => 'Wood', 'colour' => 'Black', 'brand' => 'WorkSpace', 'category_id' => 3],
            ['name' => 'Accent Chair', 'image' => 'accent_chair.jpg', 'description' => 'A stylish accent chair that will complement any room in your home.', 'height' => 90, 'width' => 60, 'depth' => 60, 'price' => 199.99, 'weight' => 12, 'material' => 'Fabric', 'colour' => 'Beige', 'brand' => 'StyleHome', 'category_id' => 3],
            ['name' => 'Storage Cabinet', 'image' => 'storage_cabinet.jpg', 'description' => 'A multi-functional storage cabinet for all your organizational needs.', 'height' => 180, 'width' => 90, 'depth' => 40, 'price' => 249.99, 'weight' => 35, 'material' => 'Wood', 'colour' => 'Grey', 'brand' => 'HomeEssentials', 'category_id' => 5],
            ['name' => 'Bunk Bed', 'image' => 'bunk_bed.jpg', 'description' => 'A sturdy bunk bed perfect for kids\' rooms or guest rooms.', 'height' => 170, 'width' => 100, 'depth' => 200, 'price' => 699.99, 'weight' => 70, 'material' => 'Metal, Wood', 'colour' => 'Silver', 'brand' => 'FamilyBeds', 'category_id' => 4],
            ['name' => 'Coffee Table with Storage', 'image' => 'storage_coffee_table.jpg', 'description' => 'A coffee table with hidden storage, perfect for small apartments.', 'height' => 40, 'width' => 120, 'depth' => 60, 'price' => 249.99, 'weight' => 20, 'material' => 'Wood', 'colour' => 'Walnut', 'brand' => 'StorageCo', 'category_id' => 2],
            ['name' => 'Sofa Bed', 'image' => 'sofa_bed.jpg', 'description' => 'A versatile sofa bed that transforms into a bed for guests.', 'height' => 80, 'width' => 180, 'depth' => 85, 'price' => 499.99, 'weight' => 40, 'material' => 'Fabric', 'colour' => 'Blue', 'brand' => 'ComfyLiving', 'category_id' => 1],
            ['name' => 'Outdoor Lounge Chair', 'image' => 'outdoor_chair.jpg', 'description' => 'An outdoor lounge chair for relaxing in the garden or balcony.', 'height' => 70, 'width' => 70, 'depth' => 70, 'price' => 149.99, 'weight' => 10, 'material' => 'Metal, Fabric', 'colour' => 'Grey', 'brand' => 'OutdoorLiving', 'category_id' => 3],
            ['name' => 'Folding Dining Table', 'image' => 'folding_dining_table.jpg', 'description' => 'A folding dining table for saving space in small apartments.', 'height' => 75, 'width' => 120, 'depth' => 80, 'price' => 399.99, 'weight' => 20, 'material' => 'Wood', 'colour' => 'Cherry', 'brand' => 'SpaceSaver', 'category_id' => 2],
            ['name' => 'Wall Shelf', 'image' => 'wall_shelf.jpg', 'description' => 'A wall-mounted shelf perfect for displaying decor or books.', 'height' => 20, 'width' => 80, 'depth' => 25, 'price' => 89.99, 'weight' => 5, 'material' => 'Wood', 'colour' => 'Black', 'brand' => 'HomeDecor', 'category_id' => 5],
            ['name' => 'Nightstand', 'image' => 'nightstand.jpg', 'description' => 'A simple and functional nightstand with storage.', 'height' => 55, 'width' => 45, 'depth' => 40, 'price' => 149.99, 'weight' => 10, 'material' => 'Wood', 'colour' => 'White', 'brand' => 'SleepEasy', 'category_id' => 4],
        ]);
    }
}
