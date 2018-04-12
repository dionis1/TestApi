<?php

use Illuminate\Database\Seeder;
use App\Produkt;

class ProduktTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produkt::truncate();

        $faker = \Faker\Factory::create();

        
        for ($i = 0; $i < 50; $i++) {
            Produkt::create([
                'product_name' => $faker->name,
                'product_description' => $faker->sentence,
                'product_price' => $faker->numberBetween($min = 0, $max = 9000),
                'product_quantity' => $faker->numberBetween($min = 0, $max = 9000),
            ]);
        }
    }
}
