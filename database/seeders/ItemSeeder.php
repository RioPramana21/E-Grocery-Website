<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::factory()->createMany([
            [
                'item_name' => 'Vegetable 1',
                'item_desc' => 'Vegetables are parts of plants that are consumed by humans or other animals as food. The original meaning is still commonly used and is applied to plants collectively to refer to all edible plant matter, including the flowers, fruits, stems, leaves, roots, and seeds.',
                'item_picture_link' => 'item_images/vegetable.jpg',
                'price' => 10000
            ],
            [
                'item_name' => 'Vegetable 2',
                'item_desc' => 'Vegetables are parts of plants that are consumed by humans or other animals as food. The original meaning is still commonly used and is applied to plants collectively to refer to all edible plant matter, including the flowers, fruits, stems, leaves, roots, and seeds.',
                'item_picture_link' => 'item_images/vegetable.jpg',
                'price' => 12000
            ],
            [
                'item_name' => 'Vegetable 3',
                'item_desc' => 'Vegetables are parts of plants that are consumed by humans or other animals as food. The original meaning is still commonly used and is applied to plants collectively to refer to all edible plant matter, including the flowers, fruits, stems, leaves, roots, and seeds.',
                'item_picture_link' => 'item_images/vegetable.jpg',
                'price' => 40000
            ],
            [
                'item_name' => 'Vegetable 4',
                'item_desc' => 'Vegetables are parts of plants that are consumed by humans or other animals as food. The original meaning is still commonly used and is applied to plants collectively to refer to all edible plant matter, including the flowers, fruits, stems, leaves, roots, and seeds.',
                'item_picture_link' => 'item_images/vegetable.jpg',
                'price' => 20000
            ],
            [
                'item_name' => 'Vegetable 5',
                'item_desc' => 'Vegetables are parts of plants that are consumed by humans or other animals as food. The original meaning is still commonly used and is applied to plants collectively to refer to all edible plant matter, including the flowers, fruits, stems, leaves, roots, and seeds. 5',
                'item_picture_link' => 'item_images/vegetable.jpg',
                'price' => 50000
            ],
            [
                'item_name' => 'Vegetable 6',
                'item_desc' => 'Vegetables are parts of plants that are consumed by humans or other animals as food. The original meaning is still commonly used and is applied to plants collectively to refer to all edible plant matter, including the flowers, fruits, stems, leaves, roots, and seeds. 6',
                'item_picture_link' => 'item_images/vegetable.jpg',
                'price' => 70000
            ],
            [
                'item_name' => 'Vegetable 7',
                'item_desc' => 'Vegetables are parts of plants that are consumed by humans or other animals as food. The original meaning is still commonly used and is applied to plants collectively to refer to all edible plant matter, including the flowers, fruits, stems, leaves, roots, and seeds. 7',
                'item_picture_link' => 'item_images/vegetable.jpg',
                'price' => 10000
            ],
            [
                'item_name' => 'Vegetable 8',
                'item_desc' => 'Vegetables are parts of plants that are consumed by humans or other animals as food. The original meaning is still commonly used and is applied to plants collectively to refer to all edible plant matter, including the flowers, fruits, stems, leaves, roots, and seeds. 8',
                'item_picture_link' => 'item_images/vegetable.jpg',
                'price' => 10000
            ],
            [
                'item_name' => 'Vegetable 9',
                'item_desc' => 'Vegetables are parts of plants that are consumed by humans or other animals as food. The original meaning is still commonly used and is applied to plants collectively to refer to all edible plant matter, including the flowers, fruits, stems, leaves, roots, and seeds. 9',
                'item_picture_link' => 'item_images/vegetable.jpg',
                'price' => 20000
            ],
            [
                'item_name' => 'Vegetable 10',
                'item_desc' => 'Vegetables are parts of plants that are consumed by humans or other animals as food. The original meaning is still commonly used and is applied to plants collectively to refer to all edible plant matter, including the flowers, fruits, stems, leaves, roots, and seeds. 10',
                'item_picture_link' => 'item_images/vegetable.jpg',
                'price' => 25000
            ],
            [
                'item_name' => 'Vegetable 11',
                'item_desc' => 'Vegetables are parts of plants that are consumed by humans or other animals as food. The original meaning is still commonly used and is applied to plants collectively to refer to all edible plant matter, including the flowers, fruits, stems, leaves, roots, and seeds. 11',
                'item_picture_link' => 'item_images/vegetable.jpg',
                'price' => 30000
            ],
            [
                'item_name' => 'Vegetable 12',
                'item_desc' => 'Vegetables are parts of plants that are consumed by humans or other animals as food. The original meaning is still commonly used and is applied to plants collectively to refer to all edible plant matter, including the flowers, fruits, stems, leaves, roots, and seeds. 12',
                'item_picture_link' => 'item_images/vegetable.jpg',
                'price' => 40000
            ],
        ]);
    }
}
