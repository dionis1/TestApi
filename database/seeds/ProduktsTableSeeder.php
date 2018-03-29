<?php

use Illuminate\Database\Seeder;

class ProduktsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();

        $faker = \Faker\Factory::create();

        
        for ($i = 0; $i < 50; $i++) {
            Product::create([
                'product_name' => $faker->name,
                'product_description' => $faker->sentence,
                'product_price' => $faker->numberBetween($min = 0, $max = 9000),
                'product_quantity' => $faker->numberBetween($min = 0, $max = 9000),
            ]);
        }
    }
}
