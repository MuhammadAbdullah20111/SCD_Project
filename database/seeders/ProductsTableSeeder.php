<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $index) { // Generate 50 rows of data
            DB::table('products')->insert([
                'brand' => $faker->company,
                'product_name' => $faker->word,
                'price' => $faker->randomFloat(2, 1000, 15000), // Random price between 10 and 1000
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
