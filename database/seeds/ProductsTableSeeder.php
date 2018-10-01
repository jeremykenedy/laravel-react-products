<?php

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        // Create 50 product records
        for ($i = 0; $i < 50; $i++) {
            Product::create([
                'title'         => $faker->title,
                'description'   => $faker->paragraph,
                'price'         => $faker->randomNumber(2),
                'availability'  => $faker->boolean(50),
            ]);
        }
    }
}
